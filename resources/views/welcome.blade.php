<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="840.000000pt" height="444.000000pt" viewBox="0 0 840.000000 444.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <metadata>
                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                    </metadata>
                    <g transform="translate(0.000000,444.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M6827 3312 l-27 -28 0 -186 c0 -184 0 -186 24 -201 13 -9 43 -17 67
                    -19 43 -3 44 -4 54 -45 16 -64 45 -88 106 -88 43 0 54 4 74 27 31 36 165 281
                    165 302 0 13 -12 16 -65 16 -38 0 -65 4 -65 10 0 6 11 38 25 72 14 34 25 64
                    25 67 0 3 -45 -39 -99 -93 -84 -83 -98 -102 -90 -118 8 -14 22 -18 64 -18 29
                    0 56 -4 60 -10 3 -5 -13 -45 -35 -90 -46 -92 -70 -104 -70 -36 0 65 -23 88
                    -93 94 l-57 4 0 144 0 144 255 0 255 0 0 -145 0 -145 -27 -1 c-110 -3 -123
                    -17 -123 -134 0 -56 -4 -86 -13 -93 -8 -7 -68 -13 -142 -14 l-130 -3 -9 -27
                    c-19 -53 -2 -58 184 -58 208 0 200 -5 200 137 0 112 1 113 68 113 75 0 82 20
                    82 234 l0 175 -26 20 c-26 20 -38 21 -318 21 l-292 0 -27 -28z"/>
                    <path d="M7037 2592 c-42 -46 -1 -72 110 -72 76 0 84 2 98 24 13 19 14 29 5
                    45 -10 19 -20 21 -104 21 -77 0 -96 -3 -109 -18z"/>
                    <path d="M261 2017 c-83 -158 -67 -182 125 -182 104 0 114 2 169 31 55 29 63
                    37 108 120 79 145 81 134 -16 134 l-83 0 -27 -55 c-46 -94 -75 -134 -103 -141
                    -45 -12 -47 14 -5 91 60 113 63 105 -32 105 l-82 0 -54 -103z"/>
                    <path d="M2935 2109 c-53 -13 -100 -46 -122 -86 -17 -32 -17 -34 2 -52 11 -11
                    40 -23 64 -28 68 -13 67 -36 0 -31 -30 2 -62 8 -71 12 -12 5 -28 -3 -55 -27
                    -21 -20 -35 -38 -32 -41 10 -10 110 -26 164 -26 78 0 149 25 195 69 64 61 47
                    102 -48 117 -23 4 -45 10 -48 15 -9 15 44 21 81 9 36 -12 38 -11 77 26 l39 39
                    -48 7 c-67 9 -151 8 -198 -3z"/>
                    <path d="M4355 2110 c-4 -6 -3 -46 1 -90 l7 -80 1913 0 1913 0 6 53 c4 28 5
                    68 3 87 l-3 35 -1917 3 c-1290 1 -1919 -1 -1923 -8z"/>
                    <path d="M780 2102 c0 -4 -31 -66 -70 -137 -38 -72 -70 -133 -70 -137 0 -5 37
                    -8 83 -8 l83 0 34 70 c19 39 37 70 40 70 3 0 17 -31 30 -70 l24 -70 81 0 80 0
                    73 140 c39 76 72 141 72 144 0 4 -36 6 -80 6 l-79 0 -33 -60 c-18 -33 -35 -60
                    -38 -60 -3 0 -16 27 -30 60 l-25 60 -87 0 c-49 0 -88 -4 -88 -8z"/>
                    <path d="M1243 1975 c-40 -74 -73 -140 -73 -145 0 -7 30 -10 82 -8 l82 3 74
                    143 73 142 -83 0 -83 -1 -72 -134z"/>
                    <path d="M1524 2028 c3 -46 9 -111 12 -145 l6 -63 80 0 80 0 101 93 c56 50
                    126 116 157 144 l55 53 -86 0 -85 0 -78 -75 c-43 -41 -80 -75 -83 -75 -3 0 -3
                    34 0 75 l5 75 -85 0 -86 0 7 -82z"/>
                    <path d="M1961 1976 c-39 -73 -71 -139 -71 -145 0 -8 45 -11 150 -11 l149 0
                    26 38 25 37 -70 3 c-53 2 -70 6 -70 17 0 12 15 15 64 15 63 0 64 1 85 36 12
                    19 21 37 21 40 0 2 -27 4 -61 4 -44 0 -60 3 -56 13 2 8 25 12 63 13 82 1 80 0
                    103 39 l20 35 -154 0 -154 0 -70 -134z"/>
                    <path d="M2331 1976 c-39 -74 -71 -139 -71 -145 0 -7 29 -11 80 -11 l80 0 26
                    52 c28 56 36 54 48 -14 l7 -38 94 0 c52 0 95 2 95 5 0 2 -12 29 -27 59 -15 31
                    -25 57 -22 58 2 2 22 12 44 23 75 38 87 110 22 133 -20 7 -88 12 -169 12
                    l-136 0 -71 -134z"/>
                    <path d="M3242 2078 c-10 -18 -45 -84 -76 -145 l-57 -113 84 0 84 0 71 140
                    c40 76 72 142 72 145 0 3 -36 5 -79 5 -79 0 -79 0 -99 -32z"/>
                    <path d="M3437 2065 l-26 -45 45 0 c24 0 44 -2 44 -5 0 -3 -20 -44 -45 -91
                    -25 -46 -45 -89 -45 -94 0 -6 34 -10 80 -10 l80 0 50 100 50 100 48 0 c47 0
                    48 1 70 45 l22 45 -174 0 -174 0 -25 -45z"/>
                    <path d="M3852 2098 c-13 -18 -142 -263 -142 -272 0 -4 37 -6 83 -4 l82 3 72
                    140 c40 77 73 141 73 143 0 1 -35 2 -79 2 -51 0 -82 -4 -89 -12z"/>
                    <path d="M4380 1796 c0 -7 7 -46 16 -85 l16 -71 1866 2 1867 3 8 40 c4 22 10
                    59 13 83 l7 42 -1897 0 c-1604 0 -1896 -2 -1896 -14z"/>
                    <path d="M1430 1540 c-25 -49 -20 -60 26 -60 l35 0 -46 -88 c-25 -48 -45 -91
                    -45 -95 0 -4 37 -7 83 -5 l82 3 49 98 50 97 46 0 c45 0 47 1 68 45 l22 45
                    -175 0 -175 0 -20 -40z"/>
                    <path d="M1765 1444 c-38 -75 -71 -140 -73 -145 -2 -5 66 -9 151 -9 l155 0 21
                    36 c12 19 21 37 21 40 0 2 -31 4 -70 4 -58 0 -68 3 -64 15 5 11 22 15 64 15
                    60 0 81 12 94 58 7 21 5 22 -48 22 -31 0 -56 5 -56 10 0 6 30 10 69 10 68 0
                    70 1 90 34 12 18 21 36 21 40 0 3 -69 6 -152 6 l-153 0 -70 -136z"/>
                    <path d="M2172 1518 c-17 -35 -52 -100 -77 -145 l-45 -83 85 0 84 0 39 71 39
                    70 25 -68 26 -68 83 -3 84 -3 70 138 c39 76 72 141 73 146 2 4 -34 7 -80 7
                    l-84 0 -33 -67 -33 -68 -30 68 -31 67 -81 0 -81 0 -33 -62z"/>
                    <path d="M2743 1483 c-59 -54 -130 -119 -158 -145 l-50 -48 86 0 c73 0 89 3
                    104 20 15 16 31 20 83 20 59 0 64 -2 59 -20 -5 -19 0 -20 79 -20 l84 0 0 123
                    c0 176 5 167 -96 167 l-84 0 -107 -97z"/>
                    <path d="M3314 1565 c-105 -33 -181 -96 -191 -158 -5 -32 -1 -41 29 -71 62
                    -62 179 -69 318 -19 85 31 160 95 160 138 0 13 -19 15 -123 15 l-123 0 -17
                    -35 c-16 -35 -16 -35 6 -35 20 -1 20 -2 4 -11 -30 -17 -82 -7 -85 17 -7 49
                    101 109 154 85 21 -9 44 -9 103 0 42 7 78 14 80 16 9 7 -36 45 -68 59 -42 17
                    -190 17 -247 -1z"/>
                    <path d="M3782 1498 c-48 -45 -116 -109 -151 -142 l-63 -61 83 -3 c75 -3 85
                    -1 98 18 11 17 24 20 77 20 57 0 64 -2 64 -20 0 -18 7 -20 86 -20 85 0 86 0
                    80 23 -3 12 -6 77 -6 145 l0 122 -91 0 -90 0 -87 -82z"/>
                    <path d="M4455 1493 c4 -10 18 -48 32 -86 l25 -67 1765 2 1764 3 30 75 c16 41
                    29 78 29 83 0 4 -822 7 -1826 7 -1735 0 -1826 -1 -1819 -17z"/>
                    <path d="M4587 1204 c-3 -3 17 -43 44 -88 151 -244 368 -466 605 -619 221
                    -143 433 -224 744 -284 124 -23 460 -23 595 1 564 101 1016 394 1317 856 38
                    59 78 128 78 135 0 7 -3376 6 -3383 -1z"/>
                    <path d="M953 1028 c-12 -24 -45 -85 -73 -136 -27 -52 -50 -98 -50 -103 0 -5
                    36 -9 80 -9 l80 0 35 70 c19 39 37 70 39 70 2 0 16 -31 31 -70 l27 -70 81 0
                    82 0 73 145 72 145 -82 0 -83 0 -30 -57 c-16 -31 -34 -55 -40 -53 -5 1 -19 26
                    -31 54 l-20 51 -85 3 -85 3 -21 -43z"/>
                    <path d="M3096 929 c-42 -77 -76 -143 -76 -145 0 -2 37 -4 83 -4 l82 0 35 65
                    c19 36 38 65 42 65 3 0 17 -29 30 -65 l23 -65 82 0 82 0 70 137 c39 76 71 141
                    71 145 0 5 -36 8 -80 8 l-80 0 -31 -62 c-35 -70 -40 -69 -76 18 l-18 44 -82 0
                    -81 0 -76 -141z"/>
                    <path d="M1465 923 l-146 -138 82 -3 c62 -2 85 1 99 13 23 21 126 21 134 0 4
                    -12 24 -15 91 -15 l85 0 -6 78 c-2 42 -7 105 -10 140 l-6 62 -88 0 -89 0 -146
                    -137z"/>
                    <path d="M2039 1045 c-47 -15 -119 -81 -119 -109 0 -21 26 -38 79 -50 27 -6
                    51 -15 52 -21 5 -17 -54 -22 -95 -8 -37 13 -40 12 -76 -19 -21 -18 -39 -36
                    -39 -39 -2 -10 38 -19 119 -25 148 -13 280 51 280 135 0 21 -59 51 -100 51
                    -17 0 -30 4 -30 9 0 17 38 22 76 12 35 -10 40 -8 75 24 27 24 35 37 26 42 -24
                    15 -200 13 -248 -2z"/>
                    <path d="M2358 1013 c-14 -27 -46 -87 -72 -134 -25 -48 -46 -92 -46 -98 0 -8
                    25 -11 80 -9 l81 3 74 143 74 142 -83 0 -83 0 -25 -47z"/>
                    <path d="M2714 1042 c-113 -37 -188 -104 -188 -168 0 -69 63 -104 186 -104
                    124 0 221 35 287 103 63 67 41 149 -48 176 -54 16 -177 12 -237 -7z"/>
                    <path d="M3725 992 c-39 -37 -104 -98 -145 -137 l-74 -70 78 -3 c61 -2 82 1
                    96 13 22 20 147 18 143 -2 -2 -10 19 -13 82 -13 l85 0 0 124 c0 68 -3 131 -6
                    140 -5 13 -23 16 -98 16 l-91 0 -70 -68z"/>
                    <path d="M4152 1018 c-12 -24 -44 -86 -72 -137 -27 -52 -50 -99 -50 -103 0 -5
                    66 -7 147 -6 l147 3 23 40 c12 22 23 43 23 48 0 4 -27 7 -60 7 -33 0 -60 2
                    -60 5 0 3 20 46 45 95 l45 90 -83 0 -83 0 -22 -42z"/>
                    </g>
                    </svg>

                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">FYP Management System</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <p>1. To ease the registration of students in UNITEN.</p>
                                    <p>2. Supervisors and Examiners can view the progress of students.</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Created By</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <p>Name : Abdul Wafi Bin Jailani</p>
                                    <p>Student ID : SW0106396</p>
                                    <p>Course : Computer Science (Software Engineering)</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </body>
</html>
