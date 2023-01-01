<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <meta name="description" content="{{$description}}" />

    <!-- Scripts -->
    @vite('resources/js/app.js')
    <title>{{$title}}</title>
</head>

<body>
    <div class="flex h-full flex-col bg-zinc-50 dark:bg-black">
        <!-- The underlying div style that the content floats above -->
        <div class="fixed inset-0 flex justify-center sm:px-8">
            <div class="flex w-full max-w-7xl lg:px-8">
                <div class="
        						w-full
        						bg-white
        						ring-1 ring-zinc-100
        						dark:bg-zinc-900 dark:ring-zinc-300/20
        					"></div>
            </div>
        </div>
        <div class="relative">
            {{-- Header --}}
            <div data-headlessui-state="" class="relative">
                <div class="pointer-events-none absolute inset-0 z-30" aria-hidden="true"></div>
                <div class="relative z-20">
                    <div
                        class="mx-auto max-w-7xl items-center justify-start px-4 py-5 sm:flex sm:px-6 sm:py-4 sm:space-x-10 md:justify-start lg:px-8">
                        <div class="w-full flex justify-center sm:w-16 sm:flex-none sm:justify-start">
                            <a href="/" class="flex"><span class="sr-only">Home</span><img
                                    class="rounded-full bg-zinc-100 object-cover dark:bg-zinc-800 h-16 w-16"
                                    src="https://res.cloudinary.com/garaji-media/image/upload/c_scale,w_200/v1665286344/SteamDiesel.dev/Jason_Law_el6xir.png"
                                    alt="Jason Law - Full stack web developer" width="64" height="64"></a>
                        </div>

                        <div class="flex flex-1 justify-center pt-6 sm:pt-0 sm:items-center sm:justify-between">
                            <nav class="flex space-x-10">
                                <a class="text-base font-medium text-gray-500 hover:text-gray-900 dark:text-gray-100 dark:hover:text-orange-600"
                                    href="/">Home</a>
                                <a class="text-base font-medium text-gray-500 hover:text-gray-900 dark:text-gray-100 dark:hover:text-orange-600"
                                    href="/services">Services</a>
                                <a class="text-base font-medium text-gray-500 hover:text-gray-900 dark:text-gray-100 dark:hover:text-orange-600"
                                    href="/blog">Blog</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>
        <!-- Main content -->
        <main>

            {{ $slot }}

        </main>
        <footer class="mt-32">

            <div class="sm:px-8">
                <div class="mx-auto max-w-7xl lg:px-8">
                    <div class="
        							border-t border-zinc-100
        							pt-10
        							pb-16
        							dark:border-zinc-700/40
        						">
                        <div class="relative px-4 sm:px-8 lg:px-12">
                            <div class="mx-auto max-w-2xl lg:max-w-5xl">
                                <div class="
        										flex flex-col
        										items-center
        										justify-between
        										gap-6
        										sm:flex-row
        									">
                                    <div class="
        											flex
        											gap-6
        											text-sm
        											font-medium
        											text-zinc-800
        											dark:text-zinc-200
        										">
                                        <a href="/" class="
        												transition
        												hover:text-teal-500
        												dark:hover:text-teal-400
        											">Home</a>
                                        <a href="/services" class="
        												transition
        												hover:text-teal-500
        												dark:hover:text-teal-400
        											">Services</a>
                                        <a href="/blog" class="
        												transition
        												hover:text-teal-500
        												dark:hover:text-teal-400
        											">Blog</a>
                                    </div>
                                    <p class="
        											text-sm text-zinc-400
        											dark:text-zinc-500
        										">
                                        ©
                                        <!-- -->2022
                                        <!-- -->
                                        Jason Law. All rights reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
