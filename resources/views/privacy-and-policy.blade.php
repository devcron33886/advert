<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Privacy and Policy - {{ config('app.name', 'Laravel') }}</title>
    <meta
        description="Akazi kose company that is located in Kigali Rwanda. It helps in finding jobs,tenders,consultancy,training and internships.">
    <meta
        keywords="Home,Rwanda,Kigali,akazi kose,jobs,job,online job,online jobs,jobs online,consultancy,training,training online,internships">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:400,500,600,700" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-gray-100">

    <x-menu-component />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Privacy and policy</h1>
                <p class="relative mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    Akazikose.com gathers personal data and utilizes it to facilitate connections between employers and job seekers sharing similar interests, alongside offering additional services. This policy outlines the collection, distribution, and options regarding personal information.
                </p>
                <h4 class="relative mt-6 font-bold text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">Data Collection and Storage</h4>
                <p class="relative mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    We gather the personal and demographic data you voluntarily provide, as well as information on your site usage and visited areas. Additionally, we may obtain data from third parties to enhance your experience. These logs are crucial for resource analysis, issue troubleshooting, and service enhancement. We employ cookies as well. 
                </p>
                <h4 class="relative mt-6 font-bold text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    Utilization of Information 
                </h4>
                <p class="relative mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    Information posted in public areas or added to the searchable Resume database may be accessed by employers locally or internationally. While we endeavor to restrict database access to legitimate users for a secure environment, we cannot guarantee prevention of unauthorized access. Moreover, we cannot regulate how authorized users handle or transfer downloaded data, hence, sensitive information should be avoided on akazikose.com. The data we collect is utilized to deliver our services, improve site functionality, and provide personalized content and advertising. We may also contact you for site updates, surveys, or service-related matters, including security updates.
                </p>
                <h4 class="relative mt-6 font-bold text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    Information Disclosure 
                </h4>
                <p class="relative mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    We share data with third parties aiding in the delivery of our services. These parties are restricted from using the data for other purposes. With your consent, we may also contact you regarding products or services from our affiliates, or share your information with third parties for similar purposes. Legal requirements may also necessitate information sharing. Data collected on our Sites may be stored in Rwanda and subjected to Rwandan law.
                </p>
                <h4 class="relative mt-6 font-bold text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    Your Information Choices
                </h4>
                <p class="relative mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    You can review, amend, or delete your personal data submitted to us at any time. However, we cannot delete data accessed by others via the Sites. Akazikose.com lacks control over information held by third parties, so it's advisable to review their privacy policies and opt-out practices. Additionally, you can disable cookies in your browser, though this may impact site usability.
                </p>
            </div>
      
    </div>
    <x-footer-component />
</body>
</html>
