<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Comment::factory(100)->create();
        $users = User::whereNot('role' ,'admin')->get();
        $posts = BlogPost::all();
        $comments = [
            ['message' => 'این پست بسیار جالب و آموزنده است.'],
            ['message' => 'ممنون که این موضوع را مطرح کردید.'],
            ['message' => 'بسیار مفید بود! از شما سپاسگزارم.'],
            ['message' => 'لطفاً بیشتر درباره این موضوع بنویسید.'],
            ['message' => 'این اطلاعات به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجربیات شما بسیار ارزشمند است.'],
            ['message' => 'به نظرم این نکته‌ای که گفتید بسیار مهم است.'],
            ['message' => 'تجزیه و تحلیل شما عالی بود.'],
            ['message' => 'این مقاله به من انگیزه داد.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'چقدر خوب که این موضوع را مطرح کردید.'],
            ['message' => 'من همیشه به مطالب شما اعتماد دارم.'],
            ['message' => 'آیا می‌توانید منابع بیشتری برای مطالعه پیشنهاد دهید؟'],
            ['message' => 'این نکته برای من بسیار مفید بود.'],
            ['message' => 'نظرات شما همیشه ارزشمند هستند.'],
            ['message' => 'این پست باعث شد که فکر کنم.'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'آیا می‌توانید مثال‌های بیشتری ارائه دهید؟'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'بسیار خوب، من این مقاله را با دوستانم به اشتراک می‌گذارم.'],
            ['message' => 'این موضوع واقعاً اهمیت دارد.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع توضیح دهید.'],
            ['message' => 'این مقاله واقعاً آموزشی بود.'],
            ['message' => 'این نظر به من بینش جدیدی داد.'],
            ['message' => 'لطفاً این مطالب را ادامه دهید.'],
            ['message' => 'بسیار خوب، تحلیل شما دقیق و مفید است.'],
            ['message' => 'من از خواندن این مطلب لذت بردم.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'چقدر خوب که این نکته را مطرح کردید.'],
            ['message' => 'من به این موضوع علاقه‌مند هستم و دوست دارم بیشتر بدانم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ['message' => 'من این مقاله را به دوستانم پیشنهاد می‌کنم.'],
            ['message' => 'امیدوارم مطالب بیشتری از این نوع منتشر کنید.'],
            ['message' => 'لطفاً بیشتر در مورد این موضوع بنویسید.'],
            ['message' => 'من همیشه از مطالب شما استفاده می‌کنم.'],
            ['message' => 'این نکته به من کمک کرد تا دیدگاه جدیدی پیدا کنم.'],
            ['message' => 'محتوای شما همیشه الهام‌بخش است.'],
            ['message' => 'از شما بابت این اطلاعات مفید تشکر می‌کنم.'],
            ['message' => 'این پست به من انگیزه داد.'],
            ['message' => 'آیا می‌توانید در مورد این موضوع بیشتر توضیح دهید؟'],
            ['message' => 'تجربیات شما بسیار جالب است.'],
            ['message' => 'این مطلب واقعاً بینش جدیدی به من داد.'],
            ['message' => 'لطفاً در مورد این موضوع بیشتر بنویسید.'],
            ['message' => 'من همیشه به این نوع مقالات علاقه دارم.'],
            ['message' => 'این اطلاعات بسیار مفید بودند.'],
            ['message' => 'این مطلب به من کمک کرد تا درک بهتری داشته باشم.'],
            ['message' => 'لطفاً تجربیات خود را به اشتراک بگذارید.'],
            ['message' => 'این پست باعث شد که من به موضوعی که فراموش کرده بودم برگردم.'],
            ['message' => 'بسیار خوشحالم که این مقاله را خواندم.'],
            ['message' => 'چقدر خوب بود! از شما سپاسگزارم.'],
            ['message' => 'این محتوا برای من بسیار مفید بود.'],
            ['message' => 'نکات شما به من کمک کرد تا بهتر درک کنم.'],
            ['message' => 'تجزیه و تحلیل شما بسیار عالی بود.'],
            ['message' => 'بسیار خوب، این نکته‌ای که گفتید خیلی جالب است.'],
            ['message' => 'لطفاً به نوشتن ادامه دهید، مطالب شما عالی است.'],
            ['message' => 'این موضوع بسیار جذاب است.'],
            ];
        foreach ($comments as $comment ){
            Comment::create([
                'user_id' => $users->random()->id,
                'post_id' => $posts->random()->id,
                'message' => $comment['message'],
                'status' => rand(0,1),
            ]);
        }

    }
}
