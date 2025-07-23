@extends('layouts.layout')

@section('content')
    <div id="home">
        <!-- logo -->
        <div class="bg-warm-beige font-soraya pt-14">
            <div class="container mx-auto py-20 px-5 text-center">
                <img src="/images/logo.png" alt="logo" class="mx-auto w-[300px] h-auto animate-on-scroll" data-animation="animate__jackInTheBox" data-delay="0.3s">
                <h1 class="text-6xl font-bold my-5">طرحینار</h1>
                <h6>طراحی سایت با مدیریت امین شایان اصل</h6>
            </div>
        </div>

        <!-- welcome -->
        <div class="bg-gradient-to-bl from-[#C0392B] to-[#EED6C4]">
            <div class="container mx-auto md:flex justify-start">
                <div class="w-full flex items-center md:w-1/3">
                    <img src="/images/home/welcome-desktop.jpg" alt="welcome" class="w-2/3 mx-auto hidden md:block">
                    <img src="/images/home/welcome-phone.jpg" alt="welcome" class="w-full block md:hidden">
                </div>
                <div class="flex items-center w-full md:w-2/3">
                    <div class="px-5 py-20">
                        <h1 class="text-2xl md:text-3xl font-bold font-soraya leading-relaxed">
                            سلام، خوش اومدی به طرحینار
                        </h1>
                        <p class="mt-8 text-xl leading-relaxed text-justify">
                            من یه طراح سایت هستم که با علاقه به دنیای وب، سال‌ها تجربه‌ی طراحی و پیاده‌سازی سایت‌های حرفه‌ای رو دارم.
                            اینجا توی طرحینار قراره با هم یک مسیر ساده، شفاف و جذاب برای راه‌اندازی سایت کسب‌و‌کارت طی کنیم از طراحی گرفته تا پشتیبانی کامل.

                            چه دنبال یه سایت جمع‌و‌جور باشی، چه یه پلتفرم کامل با فرم، درگاه، پیامک و هر چیزی که نیاز داری، من اینجام که کنارت باشم.

                            اگه آماده‌ای کسب‌وکارت رو وارد دنیای آنلاین کنی، پس میتونیم باهم همراه باشیم.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- benefits -->
        <div class="w-full">
            <div class="container mx-auto py-20">
                <h1 class="text-2xl text-pomegranate md:text-3xl font-bold font-soraya leading-relaxed text-center px-1">
                    چرا کسب‌و‌کارت به یک سایت نیاز داره؟
                </h1>
                <div class="mt-8 px-5 text-xl leading-relaxed text-justify w-full lg:w-1/2 mx-auto">
                    <p>
                        تو دنیای امروز، داشتن سایت فقط یک آپشن نیست بلکه یک نیازه.با کمترین هزینه، می‌تونی یه قدم بزرگ برای دیده شدن برداری.
                        حالا وقتشه کسب‌و‌کارت رو جدی بگیری.
                        با یک سایت حرفه‌ای:
                    </p>
                    <ul class="my-8 list-inside custom-bullets max-md:text-base">
                        <li class="my-3">
                            هر وقت کسی اسم کسب‌وکارت رو سرچ کنه، مستقیم به ویترین دیجیتال تو می‌رسه.
                        </li>
                        <li class="my-3">
                            اعتبار برندت بالا می‌ره و تو چشم مشتری‌هات جدی‌تر به نظر میای.
                        </li>
                        <li class="my-3">
                            می‌تونی خیلی راحت سفارش، پیام یا درخواست دریافت کنی.
                        </li>
                        <li class="my-3">
                            حتی جایگزین کارت ویزیتت می‌شه؛ فقط کافیه لینک بدی!
                        </li>
                        <li class="my-3">
                            محدود به مکان و زمان نیستی؛ ۲۴ ساعته بازه!
                        </li>
                    </ul>
                    <div>
                        <img src="/images/pomegranate.png" class="absolute w-20 h-20 opacity-30 rotate-45 -mt-20 left-10 sm:left-96 animate-on-scroll" data-animation="animate__flipInY" data-delay="0.5s" alt="">
                        <img src="/images/web.png" class="absolute w-20 h-auto opacity-20 -rotate-45 -mt-72 right-4 sm:right-64 animate-on-scroll" data-animation="animate__flipInY" data-delay="0.5s" alt="">
                        <img src="/images/buy.png" class="absolute w-20 h-auto opacity-40 rotate-45 -mt-40 right-20 sm:right-96 animate-on-scroll" data-animation="animate__flipInY" data-delay="0.5s" alt="">
                        <img src="/images/laptop.png" class="absolute w-20 h-auto opacity-50 rotate-90 -mt-96 left-16 sm:left-44 animate-on-scroll" data-animation="animate__flipInY" data-delay="0.5s" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- plans -->
        <div id="plans" class="w-full bg-warm-beige">
            <div class="container mx-auto py-20">
                <h1 class="text-2xl text-pomegranate md:text-3xl font-bold font-soraya leading-relaxed text-center px-1">لیست پلن‌ها</h1>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mt-16 px-3">
                    <div class="px-12 py-4 bg-cream rounded-2xl border border-gray-300 shadow-2xl cursor-default transform duration-500 hover:scale-110">
                        <div class="w-max p-3 bg-warm-beige rounded-full mx-auto text-pomegranate">
                            <i data-lucide="box" class="w-10 h-auto"></i>
                        </div>
                        <h3 class="text-xl font-bold font-soraya leading-relaxed text-center mt-4 mb-2">پلن پایه</h3>
                        <p class="text-sm text-center text-gray-400 mb-7">
                            کسب‌وکارهای کوچک یا شخصی
                        </p>
                        <h3 class="text-xl text-pomegranate font-bold font-soraya leading-relaxed text-center">۳ میلیون تومان</h3>
                        <ul class="w-max mt-6 mb-4 pr-8 tik-bullets align-top max-lg:mx-auto">
                            <li class="my-2">طراحی تا ۵ صفحه</li>
                            <li class="my-2">ریسپانسیو کامل</li>
                            <li class="my-2">دامنه .ir و هاست ۱ ساله</li>
                            <li class="my-2">پشتیبانی ۱ ماهه</li>
                        </ul>
                        <a href="#contact-me">
                            <button class="bg-pomegranate rounded-2xl py-3 w-full mt-3 text-light-gray font-bold shadow-lg cursor-pointer transform duration-500 hover:scale-90 animate-on-scroll" data-animation="animate__swing" data-delay="0.65s">مشاوره رایگان</button>
                        </a>
                    </div>

                    <div class="px-12 py-4 bg-cream rounded-2xl border border-gray-300 shadow-2xl cursor-default transform duration-500 hover:scale-110">
                        <div class="w-max p-3 bg-warm-beige rounded-full mx-auto text-pomegranate">
                            <i data-lucide="briefcase-business" class="w-10 h-auto"></i>
                        </div>
                        <h3 class="text-xl font-bold font-soraya leading-relaxed text-center mt-4 mb-2">پلن استاندارد</h3>
                        <p class="text-sm text-center text-gray-400 mb-7">
                            فروشگاهی یا شرکتی متوسط
                        </p>
                        <h3 class="text-xl text-pomegranate font-bold font-soraya leading-relaxed text-center">۶ میلیون تومان</h3>
                        <ul class="w-max mt-6 mb-4 pr-8 tik-bullets align-top max-lg:mx-auto">
                            <li class="my-2">طراحی تا ۱۰ صفحه</li>
                            <li class="my-2">فرم تماس و ثبت سفارش</li>
                            <li class="my-2">درگاه ایمیل یا فرم پیام</li>
                            <li class="my-2">پشتیبانی ۳ ماهه</li>
                        </ul>
                        <a href="#contact-me">
                            <button class="bg-pomegranate rounded-2xl py-3 w-full mt-3 text-light-gray font-bold shadow-lg cursor-pointer transform duration-500 hover:scale-90 animate-on-scroll" data-animation="animate__swing" data-delay="0.65s">مشاوره رایگان</button>
                        </a>
                    </div>

                    <div class="px-12 py-4 bg-cream rounded-2xl border border-gray-300 shadow-2xl cursor-default transform duration-500 hover:scale-110">
                        <div class="w-max p-3 bg-warm-beige rounded-full mx-auto text-pomegranate">
                            <i data-lucide="crown" class="w-10 h-auto"></i>
                        </div>
                        <h3 class="text-xl font-bold font-soraya leading-relaxed text-center mt-4 mb-2">پلن حرفه‌ای</h3>
                        <p class="text-sm text-center text-gray-400 mb-7">
                            برندهای حرفه‌ای و استارتاپ
                        </p>
                        <h3 class="text-xl text-pomegranate font-bold font-soraya leading-relaxed text-center">۱۰ میلیون تومان</h3>
                        <ul class="w-max mt-6 mb-4 pr-8 tik-bullets align-top max-lg:mx-auto">
                            <li class="my-2">طراحی تا ۱۵ صفحه</li>
                            <li class="my-2">درگاه پرداخت و پیامک</li>
                            <li class="my-2">امکان توسعه اختصاصی</li>
                            <li class="my-2">پشتیبانی ۶ ماهه</li>
                        </ul>
                        <a href="#contact-me">
                            <button class="bg-pomegranate rounded-2xl py-3 w-full mt-3 text-light-gray font-bold shadow-lg cursor-pointer transform duration-500 hover:scale-90 animate-on-scroll" data-animation="animate__swing" data-delay="0.65s">مشاوره رایگان</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- facilities -->
        <div class="w-full bg-cream">
            <div class="container mx-auto px-2 py-20">
                <h1 class="text-2xl text-pomegranate md:text-3xl font-bold font-soraya leading-relaxed text-center px-1">امکانات همراه سایت</h1>
                <div class="lg:flex lg:justify-around text-xl mt-6 max-lg:mt-12 max-lg:w-max max-lg:mx-auto max-sm:text-base">
                    <ul>
                        <li class="flex justify-start my-5">
                            <i data-lucide="Globe" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>دامنه‌ی .ir رایگان به مدت ۱ سال</p>
                        </li>
                        <li class="flex justify-start my-5">
                            <i data-lucide="Server" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>هاست رایگان با فضای مناسب به مدت ۱ سال</p>
                        </li>
                        <li class="flex justify-start my-5">
                            <i data-lucide="headset" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>پشتیبانی فنی برای مدتی مشخص (قابل تمدید)</p>
                        </li>
                        <li class="flex justify-start my-5">
                            <i data-lucide="book-key" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>آموزش کار با سایت (ویدئویی یا متنی)</p>
                        </li>
                        <li class="flex justify-start my-5">
                            <i data-lucide="message-square-share" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>اتصال سایت به فضای مجازی</p>
                        </li>
                    </ul>
                    <ul>
                        <li class="flex justify-start my-5">
                            <i data-lucide="chart-column" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>نصب گوگل آنالیتیکس (برای تحلیل بازدیدها)</p>
                        </li>
                        <li class="flex justify-start my-5">
                            <i data-lucide="lock" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>گواهی امنیتی SSL رایگان</p>
                        </li>
                        <li class="flex justify-start my-5">
                            <i data-lucide="Rocket" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>امکان توسعه سایت در آینده (قابلیت ارتقاء)</p>
                        </li>
                        <li class="flex justify-start my-5">
                            <i data-lucide="tablet-smartphone" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>نسخه ریسپانسیو (نمایش صحیح در موبایل و تبلت)</p>
                        </li>
                        <li class="flex justify-start my-5">
                            <i data-lucide="smartphone" class="ml-2 text-pomegranate animate-on-scroll" data-animation="animate__rotateIn" data-delay="0.65s"></i>
                            <p>افزودن آیکون اپ در موبایل (PWA سبک)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- portfolio -->
        <div id="portfolio" class="w-full bg-gradient-to-bl from-[#C0392B] to-[#EED6C4] pt-20 pb-5 sm:px-5">
            <h1 class="text-2xl md:text-3xl font-bold font-soraya leading-relaxed text-center px-1">نمونه کارها</h1>
            <div id="scrollContainer" class="flex w-full overflow-x-auto scroll-smooth py-10 cursor-grab select-none hide-scrollbar leading-relaxed">
                <div class="bg-cream shrink-0 rounded-2xl shadow-2xl overflow-hidden w-[300px] sm:w-[500px] mx-10 transform duration-500 hover:scale-110">
                    <div class="overflow-hidden h-60">
                        <img src="/images/home/bettertravel.png" alt="bettertravel" class="mx-auto">
                    </div>
                    <div class="w-full px-4 pb-4">
                        <h3 class="text-xl text-pomegranate font-bold font-soraya leading-relaxed text-center sm:mt-5">ایده سفر بهتر</h3>
                        <p class="mt-5 text-justify">
                            یک شرکت در حوزه گردشگری که در سطح کل کشور به برگزاری تور می‌پردازد. (مشهد)
                        </p>
                    </div>
                </div>

                <div class="bg-cream shrink-0 rounded-2xl shadow-2xl overflow-hidden w-[300px] sm:w-[500px] mx-10 transform duration-500 hover:scale-110">
                    <div class="overflow-hidden h-60">
                        <img src="/images/home/marketmap.png" alt="marketmap" class="mx-auto mt-10">
                    </div>
                    <div class="w-full px-4 pb-4">
                        <h3 class="text-xl text-pomegranate font-bold font-soraya leading-relaxed text-center sm:mt-5">مارکت مپ</h3>
                        <p class="mt-5 text-justify">
                            سایت این شرکت به بررسی و مقایسه دقیق بین اطلاعات موبایل ها و فروشنده‌های هر موبایل می‌پردازد. (تهران)
                        </p>
                    </div>
                </div>

                <div class="bg-cream shrink-0 rounded-2xl shadow-2xl overflow-hidden w-[300px] sm:w-[500px] mx-10 transform duration-500 hover:scale-110">
                    <div class="overflow-hidden h-60">
                        <img src="/images/home/sabat.png" alt="sabat" class="mx-auto">
                    </div>
                    <div class="w-full px-4 pb-4">
                        <h3 class="text-xl text-pomegranate font-bold font-soraya leading-relaxed text-center sm:mt-5">ثبات</h3>
                        <p class="mt-5 text-justify">
                            سامانه‌ای برای آموزش و پرورش بناب که از طریق این سامانه عملکرد مدارس و عوامل هر مدرسه را بررسی و امتیازدهی می‌کنند. (بناب)
                        </p>
                    </div>
                </div>

                <div class="bg-cream shrink-0 rounded-2xl shadow-2xl overflow-hidden w-[300px] sm:w-[500px] mx-10 transform duration-500 hover:scale-110">
                    <div class="overflow-hidden h-60">
                        <img src="/images/home/flixun.png" alt="flixun" class="mx-auto">
                    </div>
                    <div class="w-full px-4 pb-4">
                        <h3 class="text-xl text-pomegranate font-bold font-soraya leading-relaxed text-center sm:mt-5">فلیکسون</h3>
                        <p class="mt-5 text-justify">
                            سایتی برای شرکت فلیکسون که در حوزه واردات و فروش عمده و خرده لوازم جانبی موبایل مشغول می‌باشد؛ سایتی برای مدیریت اطلاعات و موجودیت محصولات هست. (شیراز)
                        </p>
                    </div>
                </div>

                <div class="bg-cream shrink-0 rounded-2xl shadow-2xl overflow-hidden w-[300px] sm:w-[500px] mx-10 transform duration-500 hover:scale-110">
                    <div class="overflow-hidden h-60">
                        <img src="/images/home/tadvinmasraf.png" alt="tadvinmasraf" class="h-full mx-auto">
                    </div>
                    <div class="w-full px-4 pb-4">
                        <h3 class="text-xl text-pomegranate font-bold font-soraya leading-relaxed text-center sm:mt-5">تدوین مصرف تم</h3>
                        <p class="mt-5 text-justify">
                            این سایت برای شرکت تدوین مصرف هست که در حوزه مدیریت منابع مالی فعالیت می‌کند؛ کاربران می‌توانند از طریق این سایت هزینه‌های خود را مدیریت کنند. (تبریز)
                        </p>
                    </div>
                </div>
            </div>

            <div class="m-1 flex justify-center">
                <button id="scrollLeft" class="flex justify-start ml-4 cursor-pointer rounded-2xl border-2 border-[#EED6C4] text-cream p-1 outline-0 transform duration-500 hover:scale-90">
                    <i data-lucide="arrow-right"></i>
                    <i data-lucide="ellipsis"></i>
                </button>
                <button id="scrollRight" class="flex justify-start ml-4 cursor-pointer rounded-2xl border-2 border-[#EED6C4] text-cream p-1 outline-0 transform duration-500 hover:scale-90">
                    <i data-lucide="ellipsis"></i>
                    <i data-lucide="arrow-left"></i>
                </button>
            </div>
        </div>

        <!-- about me -->
        <div id="about-me" class="w-full bg-warm-beige py-20 px-1">
            <h1 class="text-pomegranate text-2xl md:text-3xl font-bold font-soraya leading-relaxed text-center px-1 mb-10">درباره من</h1>
            <div class="container mx-auto grid items-center md:grid-cols-2 gap-0">
                <div class="md:border-l-2 max-md:border-b-2 max-md:mb-10 max-md:pb-8 border-gray-400">
                    <img src="/images/home/person.png" alt="person" class="mx-auto w-50 animate-on-scroll" data-animation="animate__flip" data-delay="0.65s">
                    <ul class="w-max mx-auto text-lg font-soraya list-green-disc">
                        <li class="my-4">امین شایان اصل</li>
                        <li class="my-4">طراح سایت</li>
                        <li class="my-4">مهندس کامپیوتر</li>
                        <li class="my-4">دانشگاه شهید رجایی تهران</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold font-soraya leading-relaxed text-center px-1 mb-10">مهارت‌ها</h3>
                    <ul class="list-gray-disc flex flex-wrap gap-8 px-6 text-lg text-gray-700">
                        <li>Php</li>
                        <li>Laravel</li>
                        <li>Laminas</li>
                        <li>Python</li>
                        <li>Django</li>
                        <li>Restful api</li>
                        <li>Sql</li>
                        <li>Html</li>
                        <li>Css</li>
                        <li>Js</li>
                        <li>Tailwind</li>
                        <li>Bootstrap</li>
                        <li>Jquery</li>
                        <li>Git</li>
                        <li>Web socket</li>
                        <li>Web scraping</li>
                        <li>Linux</li>
                        <li>Image processing</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- contact me -->
        <div id="contact-me" class="w-full bg-cream py-20">
            <div class="container mx-auto px-2">
                <h1 class="text-pomegranate text-2xl md:text-3xl font-bold font-soraya leading-relaxed text-center px-1 mb-10">تماس و سفارش</h1>
                <div class="md:flex md:justify-start md:items-center gap-4">
                    <div>
                        <img src="/images/home/telephone.png" alt="telephone" class="animate-on-scroll" data-animation="animate__shakeX" data-delay="0.65s">
                    </div>
                    <div>
                        <p class="text-justify text-xl mt-4 leading-loose">
                            اگه سوالی در ذهنت داری یا می‌خوای یک سایت برای کسب‌وکارت راه بندازی، خوشحال می‌شم باهات صحبت کنم. می‌تونی فرم زیر رو پر کنی یا مستقیماً تماس بگیری.
                             تماس مستقیم:
                            <a href="tel:09019260169" class="text-blue-900 font-semibold hover:text-blue-950">۰۹۰۱۹۲۶۰۱۶۹</a>
                        </p>
                        <div>
                            <form id="contactForm" class="w-full lg:w-2/3 space-y-5 mt-5 mx-auto" data-url="{{ route("contact.send") }}">
                                <input type="text" name="name" placeholder="نام و نام‌خانوادگی (اختیاری)" class="input">
                                <input type="text" name="phone" placeholder="شماره تماس" required class="input">
                                <input type="text" name="job" placeholder="حوزه فعالیت (اختیاری)" class="input">
                                <textarea name="message" placeholder="پیام شما (اختیاری)" rows="4" class="input max-h-[200px] min-h-[100px]"></textarea>
                                <button type="submit" class="bg-pomegranate rounded-2xl px-5 py-3 text-light-gray font-bold shadow-lg cursor-pointer transform duration-500 hover:scale-90">ارسال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- faq -->
        <div id="faq" class="w-full py-20">
            <div class="container mx-auto">
                <h1 class="text-pomegranate text-2xl md:text-3xl font-bold font-soraya leading-relaxed text-center px-1 mb-10">سوالات متداول</h1>
                <div class="space-y-4 w-full lg:w-2/3 mx-auto px-2" id="accordion">
                    <div class="border border-gray-300 rounded-lg leading-loose outline-0">
                        <button class="w-full text-right px-4 py-3 bg-gray-100 font-bold flex justify-between items-center" type="button">
                            سوال اول: چقدر زمان می‌بره تا سایت من آماده بشه؟
                            <span class="transition-transform duration-300">
                                <i data-lucide="chevron-down"></i>
                            </span>
                        </button>
                        <div class="px-4 py-3 hidden">
                            بسته به نوع و امکانات سایت، معمولاً بین ۳ تا ۷ روز کاری زمان نیاز هست. البته پروژه‌های خاص ممکنه کمی بیشتر زمان ببرن که قبل از شروع دقیق اعلام میشه.
                        </div>
                    </div>

                    <div class="border border-gray-300 rounded-lg leading-loose outline-0">
                        <button class="w-full text-right px-4 py-3 bg-gray-100 font-bold flex justify-between items-center" type="button">
                            سوال دوم: آیا بعد از تحویل سایت هم پشتیبانی دارم؟
                            <span class="transition-transform duration-300">
                                <i data-lucide="chevron-down"></i>
                            </span>
                        </button>
                        <div class="px-4 py-3 hidden">
                            بله! براساس پلن سفارشی شما، تا مدتی پشتیبانی فنی رایگان دارید البته قابل تمدید هم هست. توی این مدت هر مشکلی یا سوالی داشته باشید، کنارتون هستیم.
                        </div>
                    </div>

                    <div class="border border-gray-300 rounded-lg leading-loose outline-0">
                        <button class="w-full text-right px-4 py-3 bg-gray-100 font-bold flex justify-between items-center" type="button">
                            سوال سوم: آیا سایت در موبایل هم درست نمایش داده میشه؟
                            <span class="transition-transform duration-300">
                                <i data-lucide="chevron-down"></i>
                            </span>
                        </button>
                        <div class="px-4 py-3 hidden">
                            بله، سایت‌ها کاملاً ریسپانسیو طراحی می‌شن و در موبایل، تبلت و دسکتاپ به‌خوبی نمایش داده می‌شن.
                        </div>
                    </div>

                    <div class="border border-gray-300 rounded-lg leading-loose outline-0">
                        <button class="w-full text-right px-4 py-3 bg-gray-100 font-bold flex justify-between items-center" type="button">
                            سوال چهارم: آیا می‌تونم بعداً امکانات بیشتری به سایتم اضافه کنم؟
                            <span class="transition-transform duration-300">
                                <i data-lucide="chevron-down"></i>
                            </span>
                        </button>
                        <div class="px-4 py-3 hidden">
                            بله. سایت‌ها به‌صورت قابل توسعه ساخته می‌شن. هر زمان خواستید، میشه فروشگاه، درگاه پرداخت، چت آنلاین یا هر قابلیت دیگه‌ای اضافه کرد.
                        </div>
                    </div>

                    <div class="border border-gray-300 rounded-lg leading-loose outline-0">
                        <button class="w-full text-right px-4 py-3 bg-gray-100 font-bold flex justify-between items-center" type="button">
                            سوال پنجم: دامنه و هاست هم همراه سایت هست؟
                            <span class="transition-transform duration-300">
                                <i data-lucide="chevron-down"></i>
                            </span>
                        </button>
                        <div class="px-4 py-3 hidden">
                            بله، ما یک دامنه .ir رایگان برای ۱ سال و همچنین هاست رایگان محدود به‌مدت یک سال براتون در نظر گرفتیم.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
