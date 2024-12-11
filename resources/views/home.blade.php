<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<body>


    <!-- Header -->
    <header class="text-gray-600 body-font bg-gradient-to-r from-indigo-500 to-purple-500">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2"
                    class="w-10 h-10 text-white p-2 bg-white bg-opacity-25 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-2xl font-bold">Portfolio</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-lg justify-center space-x-6">
                <a href="#home" class="text-white hover:text-gray-200 transition duration-300">Home</a>
                <a href="#about" class="text-white hover:text-gray-200 transition duration-300">About</a>
                <a href="#projects" class="text-white hover:text-gray-200 transition duration-300">Projects</a>
                <a href="#contact" class="text-white hover:text-gray-200 transition duration-300">Contact</a>
            </nav>
            <a href="{{ asset('Mehedi_Hasan_Resume.pdf') }}" download="Mehedi_Hasan_Resume.pdf">
                <button
                    class="inline-flex items-center bg-white text-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded-full text-lg font-medium shadow-md hover:shadow-lg transition duration-300">
                    Download Resume
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </a>
        </div>
    </header>


    <!-- Hero -->
    <section class="text-gray-600 body-font bg-gradient-to-b from-gray-100 to-white py-24">
        <div class="container mx-auto flex px-5 flex-col md:flex-row items-center">
            <!-- Left Content -->
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-5xl text-4xl mb-4 font-bold text-gray-900">Md Mehedi Hasan</h1>
                <h2 class="title-font sm:text-3xl text-2xl mb-4 font-medium text-indigo-500">Web Developer</h2>
                <p class="mb-8 leading-relaxed text-lg text-gray-700">
                    I specialize in creating dynamic, user-friendly, and responsive web applications. My passion for
                    coding
                    and problem-solving drives me to build high-quality solutions tailored to meet user needs.
                </p>
                <div class="flex justify-center">
                    <a href="#projects">
                        <button
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg shadow-lg transition duration-300">
                            View Projects
                        </button>
                    </a>
                    <a href="{{ asset('Mehedi_Hasan_Resume.pdf') }}" download="Mehedi_Hasan_Resume.pdf" class="ml-4">
                        <button
                            class="inline-flex text-indigo-500 bg-gray-100 border border-gray-300 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg shadow-md transition duration-300">
                            Download Resume
                        </button>
                    </a>
                </div>
            </div>

            <!-- Right Content -->
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 flex justify-center">
                <div class="relative rounded-full bg-indigo-100 p-4">
                    <img class="object-cover object-center rounded-full w-64 h-64 shadow-lg transform hover:scale-105 transition duration-300"
                        alt="Md Mehedi Hasan" src="imgs/mehedi.png">
                </div>
            </div>
        </div>
    </section>


    {{-- Skills --}}

    <section class="text-gray-600 body-font bg-gradient-to-b from-gray-100 to-white py-24">
        <div class="container px-5 mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <h1 class="sm:text-4xl text-3xl font-bold text-gray-900 mb-4">Skills</h1>
                <p class="text-gray-700 text-lg leading-relaxed">
                    I specialize in a range of modern web development technologies, ensuring high-quality and scalable
                    solutions.
                </p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <!-- Skills Grid -->
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-4">
                <!-- Skill Card -->
                <div class="p-4 sm:w-1/2 w-full">
                    <div
                        class="bg-gradient-to-r from-indigo-100 to-indigo-200 rounded-lg shadow-lg flex p-6 items-center transition transform hover:scale-105">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" class="text-indigo-500 w-8 h-8 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="title-font font-semibold text-lg text-gray-900">HTML</span>
                    </div>
                </div>
                <!-- Skill Card -->
                <div class="p-4 sm:w-1/2 w-full">
                    <div
                        class="bg-gradient-to-r from-blue-100 to-blue-200 rounded-lg shadow-lg flex p-6 items-center transition transform hover:scale-105">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" class="text-blue-500 w-8 h-8 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="title-font font-semibold text-lg text-gray-900">CSS</span>
                    </div>
                </div>
                <!-- Skill Card -->
                <div class="p-4 sm:w-1/2 w-full">
                    <div
                        class="bg-gradient-to-r from-teal-100 to-teal-200 rounded-lg shadow-lg flex p-6 items-center transition transform hover:scale-105">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" class="text-teal-500 w-8 h-8 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="title-font font-semibold text-lg text-gray-900">Bootstrap</span>
                    </div>
                </div>
                <!-- Skill Card -->
                <div class="p-4 sm:w-1/2 w-full">
                    <div
                        class="bg-gradient-to-r from-pink-100 to-pink-200 rounded-lg shadow-lg flex p-6 items-center transition transform hover:scale-105">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" class="text-pink-500 w-8 h-8 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="title-font font-semibold text-lg text-gray-900">PHP</span>
                    </div>
                </div>
                <!-- Skill Card -->
                <div class="p-4 sm:w-1/2 w-full">
                    <div
                        class="bg-gradient-to-r from-yellow-100 to-yellow-200 rounded-lg shadow-lg flex p-6 items-center transition transform hover:scale-105">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" class="text-yellow-500 w-8 h-8 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="title-font font-semibold text-lg text-gray-900">Laravel</span>
                    </div>
                </div>
                <!-- Skill Card -->
                <div class="p-4 sm:w-1/2 w-full">
                    <div
                        class="bg-gradient-to-r from-green-100 to-green-200 rounded-lg shadow-lg flex p-6 items-center transition transform hover:scale-105">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" class="text-green-500 w-8 h-8 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="title-font font-semibold text-lg text-gray-900">MySQL</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Projects -->

    <section id="projects" class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Projects</h1>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <!-- Project 1 -->
                <div class="p-4 md:w-1/3">
                    <div
                        class="h-full rounded-lg overflow-hidden border-2 border-gray-200 border-opacity-60 hover:shadow-2xl transition duration-300 bg-gradient-to-r from-indigo-50 via-white to-indigo-50">
                        <img class="lg:h-64 md:h-48 h-40 w-full object-cover object-center rounded-t-lg"
                            src="imgs/ecommerce.png">
                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 title-font mb-4 hover:text-indigo-600 transition">
                                Ecommerce Website</h2>
                            <p class="leading-relaxed text-sm text-gray-700 mb-6">A modern ecommerce platform featuring
                                user-friendly design, product management, and seamless checkout experience.</p>
                            <div class="flex items-center justify-between">
                                <a href="#"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Live
                                    Site</a>
                                <a href="https://github.com/smmehedi4u/AppleShop"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Source
                                    Code</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="p-4 md:w-1/3">
                    <div
                        class="h-full rounded-lg overflow-hidden border-2 border-gray-200 border-opacity-60 hover:shadow-2xl transition duration-300 bg-gradient-to-r from-indigo-50 via-white to-indigo-50">
                        <img class="lg:h-64 md:h-48 h-40 w-full object-cover object-center rounded-t-lg"
                            src="imgs/dept.png">
                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 title-font mb-4 hover:text-indigo-600 transition">
                                Department Management System</h2>
                            <p class="leading-relaxed text-sm text-gray-700 mb-6">A platform designed to enhance
                                collaboration between students and teachers with scheduling and assignment management
                                tools.</p>
                            <div class="flex items-center justify-between">
                                <a href="#"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Live
                                    Site</a>
                                <a href="https://github.com/smmehedi4u/DMS-Project"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Source
                                    Code</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="p-4 md:w-1/3">
                    <div
                        class="h-full rounded-lg overflow-hidden border-2 border-gray-200 border-opacity-60 hover:shadow-2xl transition duration-300 bg-gradient-to-r from-indigo-50 via-white to-indigo-50">
                        <img class="lg:h-64 md:h-48 h-40 w-full object-cover object-center rounded-t-lg"
                            src="imgs/skill.png">
                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 title-font mb-4 hover:text-indigo-600 transition">
                                Skill Development System Management</h2>
                            <p class="leading-relaxed text-sm text-gray-700 mb-6">A learning management system providing
                                users access to courses, topics, and tests for skill enhancement.</p>
                            <div class="flex items-center justify-between">
                                <a href="#"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Live
                                    Site</a>
                                <a href="https://github.com/smmehedi4u/skillDev"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Source
                                    Code</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="p-4 md:w-1/3">
                    <div
                        class="h-full rounded-lg overflow-hidden border-2 border-gray-200 border-opacity-60 hover:shadow-2xl transition duration-300 bg-gradient-to-r from-indigo-50 via-white to-indigo-50">
                        <img class="lg:h-64 md:h-48 h-40 w-full object-cover object-center rounded-t-lg"
                            src="imgs/library.png">
                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 title-font mb-4 hover:text-indigo-600 transition">
                                Library Management System</h2>
                            <p class="leading-relaxed text-sm text-gray-700 mb-6">A library management system providing
                                users access to books, topics, and tests for skill enhancement.</p>
                            <div class="flex items-center justify-between">
                                <a href="#"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Live
                                    Site</a>
                                <a href="https://github.com/smmehedi4u/LMSv1"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Source
                                    Code</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 5 -->
                <div class="p-4 md:w-1/3">
                    <div
                        class="h-full rounded-lg overflow-hidden border-2 border-gray-200 border-opacity-60 hover:shadow-2xl transition duration-300 bg-gradient-to-r from-indigo-50 via-white to-indigo-50">
                        <img class="lg:h-64 md:h-48 h-40 w-full object-cover object-center rounded-t-lg"
                            src="imgs/carRental.png">
                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 title-font mb-4 hover:text-indigo-600 transition">
                                Car Rental Web Application</h2>
                            <p class="leading-relaxed text-sm text-gray-700 mb-6">A car rental web application providing
                                users access to cars, topics, and tests for skill enhancement.</p>
                            <div class="flex items-center justify-between">
                                <a href="#"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Live
                                    Site</a>
                                <a href="https://github.com/smmehedi4u/CarRental"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Source
                                    Code</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 6 -->
                <div class="p-4 md:w-1/3">
                    <div
                        class="h-full rounded-lg overflow-hidden border-2 border-gray-200 border-opacity-60 hover:shadow-2xl transition duration-300 bg-gradient-to-r from-indigo-50 via-white to-indigo-50">
                        <img class="lg:h-64 md:h-48 h-40 w-full object-cover object-center rounded-t-lg"
                            src="imgs/blog.png">
                        <div class="p-6">
                            <h2
                                class="text-xl font-bold text-gray-900 title-font mb-4 hover:text-indigo-600 transition">
                                Blog Website</h2>
                            <p class="leading-relaxed text-sm text-gray-700 mb-6">A blog website providing users access
                                to blogs, topics, and tests for skill enhancement.</p>
                            <div class="flex items-center justify-between">
                                <a href="#"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Live
                                    Site</a>
                                <a href="https://github.com/smmehedi4u/Blog"
                                    class="text-indigo-500 inline-flex items-center border border-indigo-500 py-2 px-4 rounded-lg hover:bg-indigo-500 hover:text-white transition duration-200">Source
                                    Code</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    {{-- Education --}}

    <section id="education" class="text-gray-600 body-font bg-blue-50">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Education</h1>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <!-- Education 1 -->
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div
                    class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0 hover:shadow-lg transition transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#4A90E2" viewBox="0 0 24 24"
                        class="sm:w-16 sm:h-16 w-10 h-10">
                        <path d="M12 2L1 7l11 5 11-5-11-5zM3 8v6c0 3.867 4.477 7 10 7s10-3.133 10-7V8l-10 5-10-5z" />
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-xl title-font font-semibold mb-2">BSc in Computer Science and
                        Engineering</h2>
                    <p class="leading-relaxed text-base">Faridpur Engineering College, Engineering and Technology Unit,
                        University of Dhaka.</p>
                    <span class="text-sm text-gray-500 block mt-2">2019 - 2024</span>
                </div>
            </div>
            <!-- Education 2 -->
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-xl title-font font-semibold mb-2">HSC in Science</h2>
                    <p class="leading-relaxed text-base">Juranpur Adarsha College, Daudkandi, Cumilla.</p>
                    <span class="text-sm text-gray-500 block mt-2">2016 - 2018</span>
                </div>
                <div
                    class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 flex-shrink-0 hover:shadow-lg transition transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#34D399" viewBox="0 0 24 24"
                        class="sm:w-16 sm:h-16 w-10 h-10">
                        <path d="M12 2L1 7l11 5 11-5-11-5zM1 17v2c0 1.657 3.134 3 7 3s7-1.343 7-3v-2l-7 3-7-3z" />
                    </svg>
                </div>
            </div>
            <!-- Education 3 -->
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div
                    class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 flex-shrink-0 hover:shadow-lg transition transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F59E0B" viewBox="0 0 24 24"
                        class="sm:w-16 sm:h-16 w-10 h-10">
                        <path
                            d="M12 2L1 7v10l11 5 11-5V7L12 2zM3 8.294l9 4.091v7.451l-9-4.091V8.294zM21 15.745l-9 4.091V12.385l9-4.091v7.451z" />
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-xl title-font font-semibold mb-2">SSC in Science</h2>
                    <p class="leading-relaxed text-base">Daudkandi Model High School, Cumilla.</p>
                    <span class="text-sm text-gray-500 block mt-2">2011 - 2016</span>
                </div>
            </div>
        </div>
    </section>




    <!-- Contact -->

    <section id="contact" class="text-gray-600 body-font relative ">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-4xl text-3xl font-extrabold title-font mb-4 text-gray-900">Contact Me</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-lg text-gray-600">
                    I'd love to hear from you! Whether you have a question, feedback, or just want to say hi.
                </p>
            </div>
            <form action="{{ route('contact.send') }}" method="POST"">
                @csrf
                <div class="lg:w-1/2 md:w-2/3 mx-auto bg-white rounded-lg shadow-lg p-8">
                    <div class="flex flex-wrap -m-2">
                        <!-- Name Input -->
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-4 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <!-- Email Input -->
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-4 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <!-- Message Input -->
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="message"
                                    class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-40 text-base outline-none text-gray-700 py-2 px-4 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="p-2 w-full">
                            <button
                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded-full text-lg shadow-lg transition-transform transform hover:scale-105">
                                Submit
                            </button>
                        </div>

                        @if (session('success'))
                            <div class="bg-green-500 text-white p-4 rounded">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Contact Info -->
                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            <a href="mailto:mehedisarker379@gmail.com" class="text-indigo-500 text-lg font-semibold">
                                mehedisarker379@gmail.com
                            </a>
                            <p class="leading-relaxed my-5 text-gray-700">
                                Daudkandi, Cumilla.<br>Bangladesh
                            </p>
                            <!-- Social Icons -->
                            <span class="inline-flex space-x-4">
                                <a href="#" class="text-indigo-500 hover:text-indigo-700 transition">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="text-indigo-500 hover:text-indigo-700 transition">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#" class="text-indigo-500 hover:text-indigo-700 transition">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-6 h-6"
                                        viewBox="0 0 24 24">
                                        <rect width="20" height="20" x="2" y="2" rx="5"
                                            ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                    </svg>
                                </a>
                                <a href="#" class="text-indigo-500 hover:text-indigo-700 transition">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <!-- Footer -->

    <footer class="text-gray-600 body-font bg-gray-100 border-t border-gray-200">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2"
                    class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-2xl font-bold text-indigo-600">Mehedi's Portfolio</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-300 sm:py-2 sm:mt-0 mt-4">
                © 2024 Mehedi Hasan —
                <a href="https://www.linkedin.com/in/mehedi-hasan-muhit-8714841b0/"
                    class="text-indigo-500 ml-1 hover:text-indigo-700" rel="noopener noreferrer"
                    target="_blank">@smmehedi4u</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a href="#" class="text-gray-500 hover:text-indigo-500 transition-colors duration-300">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a href="#" class="ml-3 text-gray-500 hover:text-indigo-500 transition-colors duration-300">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a href="#" class="ml-3 text-gray-500 hover:text-indigo-500 transition-colors duration-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a href="#" class="ml-3 text-gray-500 hover:text-indigo-500 transition-colors duration-300">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>


</body>

</html>
