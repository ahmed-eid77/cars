<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{

    public $services = [
        [
            'title'  => 'حجز السيارات عبر الإنترنت',
            'description' => 'يتيح للعملاء حجز السيارات بسهولة عبر الإنترنت من خلال الموقع الإلكتروني، مما يوفر لهم الوقت والجهد',
            'icon'  => 'fa fa-car',
        ],
        [
            'title'  => 'استعراض ومقارنة السيارات',
            'description' => 'يوفر الموقع قاعدة بيانات شاملة للسيارات المتاحة للإيجار، مما يتيح للعملاء استعراض ومقارنة مواصفات السيارات المختلفة وأسعارها',
            'icon'  => 'fa fa-car',
        ],
        [
            'title'  => 'خدمة التوصيل والاستلام',
            'description' => 'تقدم بعض شركات تأجير السيارات خدمة توصيل واستلام السيارات إلى المكان الذي يحدده العميل، مثل المطار أو الفندق',
            'icon'  => 'fa fa-car',
        ],
        [
            'title'  => 'تأجير سيارات فاخرة:',
            'description' => 'يمكن للعملاء تأجير سيارات فاخرة أو رياضية للمناسبات الخاصة أو السفر بأسعار تنافسية',
            'icon'  => 'fa fa-car',
        ],
        [
            'title'  => 'دعم العملاء على مدار الساعة',
            'description' => 'يقدم بعض المواقع دعماً على مدار الساعة للعملاء، سواء عبر الهاتف أو البريد الإلكتروني أو الدردشة المباشرة، للرد على استفساراتهم ومساعدتهم في حل المشاكل',
            'icon'  => 'fa fa-car',
        ],
        [
            'title'  => 'برامج العروض الترويجية',
            'description' => 'توفر بعض شركات تأجير السيارات برامج وولاء للعملاء المتكررين وتقديم عروض ترويجية وخصومات لتحفيز العملاء على استخدام خدماتها',
            'icon'  => 'fa fa-car',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Service::factory(6)->create();
        foreach ($this->services as $service) {
            Service::create($service);
        }
    }
}
