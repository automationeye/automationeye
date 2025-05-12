<?php

namespace App\Console\Commands;

use App\Models\Paper;
use Illuminate\Console\Command;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class RegenerateQrCodes extends Command
{
    protected $signature = 'papers:regenerate-qr-codes';

    protected $description = 'Regenerate QR codes for all research papers';

    public function handle()
    {
        $papers = Paper::all();
        $count = 0;

        $this->info('Starting QR code regeneration for ' . $papers->count() . ' papers...');
        $bar = $this->output->createProgressBar($papers->count());
        $bar->start();

        foreach ($papers as $paper) {
            try {
                $download_url = route('papers.download', $paper->id);
                $qr_filename = 'paper-' . $paper->id . '.png';
                $qr_path = 'qrcodes/' . $qr_filename;
                $qr_full_path = public_path('storage/' . $qr_path);
                
                if (!file_exists(dirname($qr_full_path))) {
                    mkdir(dirname($qr_full_path), 0755, true);
                }
                
                if (file_exists($qr_full_path)) {
                    unlink($qr_full_path);
                }
                
                QrCode::format('png')
                    ->size(300)
                    ->margin(2)
                    ->errorCorrection('H')
                    ->generate($download_url, $qr_full_path);
                
                if (!file_exists($qr_full_path)) {
                    $this->error("\nFailed to create QR code for paper ID: " . $paper->id);
                    continue;
                }
                
                $paper->qr_code_url = asset('storage/' . $qr_path);
                $paper->save();
                
                $count++;
            } catch (\Exception $e) {
                $this->error("\nError processing paper ID " . $paper->id . ": " . $e->getMessage());
            }
            
            $bar->advance();
        }

        $bar->finish();
        $this->info("\n$count QR codes successfully regenerated.");
        $this->info("\nVerify that your storage:link is properly set up using 'php artisan storage:link'");

        return 0;
    }
}