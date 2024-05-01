<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layout.nav')

    <div class="container py-4">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-full">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://th.bing.com/th/id/R.29391507774fb55e8080a108f2fa58ec?rik=7eKfojBM7RqN5w&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_202966.png&ehk=G0Singxrox6Ibj2WcLuG54%2bBG5cxphxoJwKhS6xVUYE%3d&risl=&pid=ImgRaw&r=0" alt="Modern building architecture">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold italic">Мөнгө хадгалах нууц</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Хадгаламжаа нээж aваарай</a>
                    <p class="mt-2 text-slate-500">Яаралтай тусламжийн сан: Амьдралыг урьдчилан тааварлах боломжгүй бөгөөд эмнэлгийн яаралтай тусламж, автомашины засвар, гэнэтийн ажил алдах зэрэг гэнэтийн зардал хэзээ ч гарч болзошгүй. Яаралтай тусламжийн санд хуримтлал үүсгэх нь өр төлбөргүйгээр ийм нөхцөл байдлыг даван туулах санхүүгийн бэлтгэлтэй байх болно.
                                                    Санхүүгийн аюулгүй байдал: Мөнгө хэмнэх нь танд болон таны гэр бүлийн аюулгүй байдлын сүлжээ, санхүүгийн аюулгүй байдлыг хангана. Энэ нь ажилгүйдэл, санхүүгийн хүндрэлтэй үед амьжиргааны зардлаа нөхөж, стресс, эргэлзээг багасгах боломжийг олгоно.</p>
                </div>
            </div>
        </div>
    </div>

        <div class="flex flex-row" style="padding: 50px">
            <div class="basis-1/2">
                <div class="flex justify-start">
                    <div class="max-w-md bg-white rounded-2xl shadow-neon overflow-hidden">
                        <div class="md:flex">
                            <div class="md:shrink-0 ">
                                <img class="h-20 w-full object-cover md:h-full md:w-48 drop-shadow-md" src="https://static.vecteezy.com/system/resources/previews/011/423/791/original/3d-rendering-money-safe-box-isolated-png.png" alt="Modern building architecture">
                            </div>
                            <div class="p-8">
                                <div class="uppercase tracking-wide text-sm text-cyan-500 font-bold italic">The secret of reading Book</div>
                                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:bg-red-500">Incredible accommodation for your team</a>
                                    <p class="mt-2 text-green-500">The monetary system is the mechanism by which a society creates, manages, and regulates the supply of money within its economy. It encompasses various institutions, policies, and practices that govern the issuance, distribution, and control of money.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="basis-1/2">
                <div class="max-w-md shadow-md overflow-hidden">
                    <div class="box-border border-rounded hover:box-content">
                            <div class="bg-cyan text-center mt-5 mb-5">
                                <p class="italic rounded text-blue-800 font-bold">Танд санал болгох номын жагсаалт</p>
                            </div>
                        <div class="flex flex-row">
                            <div class="box-content  h-32 w-32 p-4 border-1 ...">
                                <img class="cover-fit" src="https://th.bing.com/th/id/R.8637f706459fac4dff2b2bef06898239?rik=Z9gaPpQ9ZHebhA&pid=ImgRaw&r=0" alt="">
                            </div>
                            <div class="box-content  h-32 w-32 p-4 border-1 ...">
                                <img class="cover-fit" src="https://th.bing.com/th/id/R.8637f706459fac4dff2b2bef06898239?rik=Z9gaPpQ9ZHebhA&pid=ImgRaw&r=0" alt="">
                            </div>
                            <div class="box-content  h-32 w-32 p-4 border-1 ...">
                                <img class="cover-fit" src="https://th.bing.com/th/id/R.8637f706459fac4dff2b2bef06898239?rik=Z9gaPpQ9ZHebhA&pid=ImgRaw&r=0" alt="">
                            </div>
                            <div class="box-content  h-32 w-32 p-4 border-1 ...">
                                <img class="cover-fit" src="https://th.bing.com/th/id/R.8637f706459fac4dff2b2bef06898239?rik=Z9gaPpQ9ZHebhA&pid=ImgRaw&r=0" alt="">
                            </div>
                        </div>
                        <div class="flex flex-row ">
                            <div class="bg-cyan text-center mt-5 mb-5">
                                <p class="italic rounded text-blue-500/75"></p>
                            </div>
                            <div class="box-content   h-32 w-32 p-4 border-1 ...">
                                <img class="cover-fit" src="https://th.bing.com/th/id/R.8637f706459fac4dff2b2bef06898239?rik=Z9gaPpQ9ZHebhA&pid=ImgRaw&r=0" alt="">
                            </div>
                            <div class="box-content   h-32 w-32 p-4 border-1 ...">
                                <img class="cover-fit" src="https://th.bing.com/th/id/R.8637f706459fac4dff2b2bef06898239?rik=Z9gaPpQ9ZHebhA&pid=ImgRaw&r=0" alt="">
                            </div>
                            <div class="box-content   h-32 w-32 p-4 border-1 ...">
                                <img class="cover-fit" src="https://th.bing.com/th/id/R.8637f706459fac4dff2b2bef06898239?rik=Z9gaPpQ9ZHebhA&pid=ImgRaw&r=0" alt="">
                            </div>
                            <div class="box-content   h-32 w-32 p-4 border-1 ...">
                                <img class="cover-fit" src="https://th.bing.com/th/id/R.8637f706459fac4dff2b2bef06898239?rik=Z9gaPpQ9ZHebhA&pid=ImgRaw&r=0" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layout.footer')

    <div class="container py-20">
        <div class="max-w-full bg-white rounded-3xl shadow-green overflow-hidden">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48 drop-shadow-md" src="https://static.vecteezy.com/system/resources/previews/011/423/791/original/3d-rendering-money-safe-box-isolated-png.png" alt="">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">The secret of saving Money</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-indigo-400 italic hover:underline">It's a way that u'll undertsand to save money</a>
                    <p class="mt-2 text-balance italic repeat-none">The monetary system is the mechanism by which a society creates, manages, and regulates the supply of money within its economy. It encompasses various institutions, policies, and practices that govern the issuance, distribution, and control of money.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-10">
        <div class="max-w-md mx-auto bg-gradient-to-r from-white to-green-500 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <p class="uppercase tracking-wide text-sm text-indigo-500 font-semibold first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-slate-1000 first-letter:mr-3 first-letter:float-left">
                        Baljinnyam, Must student studying Information Technology
                        <br>ooks are the first way to achieve success.
                        <br>ooks are believed in God
                        <br>ooks are known as only a smart person
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{count: 0}">
            <button x-on:click="count++">Increment</button>
            <span x-text="count"></span>
    </div>

</body>
</html>
