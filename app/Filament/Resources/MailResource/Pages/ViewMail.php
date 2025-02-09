<?php

namespace App\Filament\Resources\MailResource\Pages;

use App\Filament\Resources\MailResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Str;
use App\Models\ProjectTheme;
use App\Models\Service;
use App\Models\Mail;
use Filament\Notifications\Notification;

class ViewMail extends ViewRecord
{
    protected static string $resource = MailResource::class;
        
    protected function getHeaderActions(): array
    {
        $mail = $this->getRecord();
        $client_name = Str::of($mail->name)->replace(' ', '%20');
        $client_email = $mail->email;
        $service_title = Str::of(Service::find($mail->service_id)->title)->replace(' ', '%20');
        $project_theme = Str::of(ProjectTheme::find($mail->project_theme_id)->name)->replace(' ', '%20');
        $current_admin_name = Str::of(auth()->user()->name)->replace(' ', '%20');
        $mail_subject = "Penawaran%20%26%20Rincian%20Layanan%20".$service_title."%20-%20PT.%20Informatika%20Media%20Pratama.";
        $mail_body = "mailto:".$client_email."?subject=".$mail_subject."&body=Halo%20".$client_name."%0AKami%20sangat%20senang%20dapat%20memberikan%20Anda%20detail%20lebih%20lanjut%20mengenai%20layanan%20".$service_title."%20yang%20Anda%20minati.%20Berdasarkan%20permintaan%20Anda%2C%20kami%20telah%20merinci%20proyek%20menjadi%20sebagai%20berikut%3A%20%C2%A0%0A%0A%F0%9F%93%8C%20Layanan%20yang%20Ditawarkan%3A%20".$service_title."%0A%F0%9F%93%8C%20Tema%20Proyek%3A%20".$project_theme."%0A%F0%9F%93%8C%20Estimasi%20Waktu%20Pengerjaan%3A%20%0A%F0%9F%93%8C%20Harga%3A%20%0A%0A%F0%9F%92%A1%20Lebih%20Lanjut%3A%20%0AJika%20Anda%20memiliki%20pertanyaan%20atau%20ingin%20melakukan%20revisi%2C%20jangan%20ragu%20untuk%20menghubungi%20kami.%20%C2%A0%0A%0A%F0%9F%93%9E%20Apa%20langkah%20selanjutnya%3F%0AJika%20Anda%20tertarik%20untuk%20melanjutkan%2C%20silahkan%20balas%20email%20ini%20atau%20hubungi%20kami%20di%200822-1020-1446.%20Kami%20juga%20dapat%20menjadwalkan%20pertemuan%20untuk%20membahas%20lebih%20lanjut.%20%C2%A0%0A%0AKami%20sangat%20menantikan%20kerja%20sama%20ini!%20%C2%A0%0A%0ASalam%2C%20%C2%A0%0A".$current_admin_name."%0APT.%20Informatika%20Media%20Pratama.";
        
        return [
            Actions\Action::make('Reply')
                ->url($mail_body)
                ->icon('heroicon-m-arrow-turn-up-left')
                ->color('info')
                ->button(),
            Actions\Action::make('Done')
                ->icon('heroicon-m-check')
                ->action(function ($record) {
                    $record->update([
                        'replied' => true,
                        'admin_id' => auth()->user()->id
                    ]);
                })
                ->color('success')
                ->after(function () {
                    Notification::make()
                        ->title('Saved')
                        ->success()
                        ->send();
            
                    return redirect()->to($this->getResource()::getUrl('index'));
                }),
            Actions\Action::make('Undone')
                ->icon('heroicon-m-x-mark')
                ->action(function () {
                    Mail::find($this->data['id'])->update(['replied' => false, 'admin_id' => auth()->user()->id]);
                })
                ->color('danger')
                ->after(function () {
                    Notification::make()
                        ->title('Saved')
                        ->success()
                        ->send();
            
                    return redirect()->to($this->getResource()::getUrl('index'));
                }),
        ];
    }
}
