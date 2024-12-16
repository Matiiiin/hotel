<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => 'پریسا مرادی',
            'city' => 'تهران',
            'image' => 'parisa1.png',
            'message' => 'من از خدمات این شرکت بسیار راضی هستم. تیم بسیار حرفه‌ای و همواره آماده کمک است. به هر کسی که به دنبال یک شرکت قابل اعتماد است، توصیه می‌کنم.',
        ]);
        Testimonial::create([
            'name' => 'محمد رضا علوی',
            'city' => 'مشهد',
            'image' => 'AliKhavari1.jpg',
            'message' => 'من تجربه فوق‌العاده‌ای با این شرکت داشتم. همه چیز عالی بود و از اقامت ما به بهترین نحو مراقبت شد.',
        ]);
        Testimonial::create([
            'name' => 'سارا کریمی',
            'city' => 'اصفهان',
            'image' => 'sara1.png',
            'message' => 'شرکت بسیار حرفه‌ای است و خدمات عالی ارائه می‌دهد. من و خانواده‌ام از اقامتمان بسیار لذت بردیم.',
        ]);
        Testimonial::create([
            'name' => 'رضا نوری',
            'city' => 'شیراز',
            'image' => 'arshia1.png',
            'message' => 'تجربه‌ای فوق‌العاده با تیمی که همیشه آماده کمک است. خدمات عالی و حرفه‌ای. به شدت توصیه می‌کنم.',
        ]);
        Testimonial::create([
            'name' => 'مهسا افشار',
            'city' => 'تبریز',
            'image' => 'mahsa1.png',
            'message' => 'خدمات بی‌نظیر و تیمی حرفه‌ای. من قطعاً دوباره از این شرکت استفاده خواهم کرد و به دوستانم هم معرفی می‌کنم.',
        ]);

    }
}
