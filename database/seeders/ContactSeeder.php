<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Contact::factory(4)->create();
        $records = [
            [
                'name' => 'علی رضایی',
                'email' => 'ali.rezaei@example.com',
                'phone' => '09123456789',
                'subject' => 'پرسش درباره محصولات',
                'message' => 'سلام، می‌خواستم اطلاعات بیشتری درباره محصولات شما دریافت کنم.'
            ],
            [
                'name' => 'فاطمه حسینی',
                'email' => 'fatemeh.hosseini@example.com',
                'phone' => '09121234567',
                'subject' => 'نظرات درباره خدمات',
                'message' => 'خدمات شما بسیار عالی بود و از تیم شما سپاسگزارم.'
            ],
            [
                'name' => 'سعید محمدی',
                'email' => 'saeed.mohammadi@example.com',
                'phone' => '09132123456',
                'subject' => 'درخواست مشاوره',
                'message' => 'لطفاً برای مشاوره در زمینه خدمات خود با من تماس بگیرید.'
            ],
            [
                'name' => 'زهرا امینی',
                'email' => 'zahra.amini@example.com',
                'phone' => '09141234567',
                'subject' => 'سوال در مورد قیمت‌ها',
                'message' => 'لطفاً قیمت محصولات جدید خود را به من اطلاع دهید.'
            ],
            [
                'name' => 'محمود کریمی',
                'email' => 'mahmood.karimi@example.com',
                'phone' => '09151234567',
                'subject' => 'نقد و بررسی',
                'message' => 'مقاله شما درباره نقد و بررسی بسیار مفید بود. سپاسگزارم.'
            ],
            [
                'name' => 'سمیه قاسمی',
                'email' => 'somayeh.qasemi@example.com',
                'phone' => '09162234567',
                'subject' => 'پیشنهاد همکاری',
                'message' => 'می‌خواستم پیشنهادی برای همکاری با شما داشته باشم.'
            ],
            [
                'name' => 'محسن لطفی',
                'email' => 'mohsen.lotfi@example.com',
                'phone' => '09173234567',
                'subject' => 'سوال درباره بازگشت کالا',
                'message' => 'چگونه می‌توانم کالای خریداری شده را بازگشت دهم؟'
            ],
            [
                'name' => 'نیلوفر بهرامی',
                'email' => 'niloufar.bahrami@example.com',
                'phone' => '09184234567',
                'subject' => 'نظرسنجی',
                'message' => 'لطفاً در نظرسنجی ما شرکت کنید تا خدمات بهتری ارائه دهیم.'
            ],
            [
                'name' => 'کامران سلیمانی',
                'email' => 'kamran.seyedi@example.com',
                'phone' => '09195234567',
                'subject' => 'سوال درباره خدمات',
                'message' => 'می‌خواستم در مورد خدمات پس از فروش شما سوال بپرسم.'
            ],
            [
                'name' => 'ریحانه زمانی',
                'email' => 'reyhaneh.zamani@example.com',
                'phone' => '09106234567',
                'subject' => 'انتقاد از خدمات',
                'message' => 'متاسفانه تجربه خوبی از خدمات شما نداشتم و امیدوارم بهتر شوید.'
            ],
            [
                'name' => 'مجید مرادی',
                'email' => 'majid.moradi@example.com',
                'phone' => '09117234567',
                'subject' => 'پشتیبانی',
                'message' => 'نیاز به پشتیبانی دارم. لطفاً با من تماس بگیرید.'
            ],
            [
                'name' => 'عطرآگین نادری',
                'email' => 'atraghin.naderi@example.com',
                'phone' => '09128234567',
                'subject' => 'سوال درباره ثبت‌نام',
                'message' => 'چگونه می‌توانم در سایت شما ثبت‌نام کنم؟'
            ],
            [
                'name' => 'فرزاد امیری',
                'email' => 'farzad.amiri@example.com',
                'phone' => '09139234567',
                'subject' => 'مشکلات ورود به حساب',
                'message' => 'در ورود به حساب کاربری خود با مشکل مواجه هستم.'
            ],
            [
                'name' => 'شیدا پورمحمدی',
                'email' => 'sheida.pourmohammadi@example.com',
                'phone' => '09150234567',
                'subject' => 'تغییر آدرس',
                'message' => 'آیا می‌توانم آدرس ارسال را تغییر دهم؟'
            ]
        ];

        foreach ($records as $record){
            Contact::create([
                'name' =>$record['name'],
                'email' => $record['email'],
                'phone' => $record['phone'],
                'subject' => $record['subject'],
                'message' => $record['message']
            ]);
        }
    }
}
