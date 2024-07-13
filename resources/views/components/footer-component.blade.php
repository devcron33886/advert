<footer class="bg-blue-900" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="border border-white rounded-md py-4 px-4">
                <h3 class="text-white font-semibold ">
                    Get in touch
                </h3>
                <ul class="mt-4">
                    <li class="text-white py-2">Address: {{ $settings->address ?? '-' }}</li>
                    <li class="text-white py-2">Phone: {{ $settings->phone ?? '-'  }}</li>
                    <li class="text-white py-2">Whatsapp: {{ $settings->phone ?? '-' }}</li>
                    <li class="text-white py-2">E-mail: {{ $settings->email ?? '-'  }}</li>
                </ul>
                <div class="flex space-x-6 md:order-2 mt-2">
                    <a href="{{ $settings->facebook ?? '-' }}" class="text-white hover:text-black">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="{{ $settings->instagram ?? '-'  }}" class="text-white hover:text-black">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="{{ $settings->twitter ?? '-'  }}" class="text-white hover:text-black">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="{{ $settings->linkedin ?? '-' }}" class="text-white hover:text-black">
                        <span class="sr-only">Linkedin</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="h-8 w-8" viewBox="0 0 24 24">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg>
                    </a>
                    <a href="{{ $settings->whatsapp ?? '-'  }}" class="text-white hover:text-black">
                        <span class="sr-only">Whatsapp</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="h-6 w-6" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                    </a>

                </div>
            </div>
            <div class="border border-white rounded-md px-4 py-4">
                <h3 class="text-white font-semibold">
                    Services
                </h3>
                <ul class="mt-4">
                    <li class="text-white py-2"> Jobs Listing </li>
                    <li class="text-white py-2"> Career Guidance</li>
                    <li class="text-white py-2"> CV writing </li>
                    <li class="text-white py-2"> Job search skills</li>
                    <li class="text-white py-2">Headhunting</li>

                </ul>
            </div>
            <div class="border border-white rounded-md px-4 py-4">
                <h3 class="text-white font-semibold">
                    Quick Links
                </h3>
                <ul class="mt-4">
                    <li class="py-2">
                        <a href="{{ route('home') }}" wire:navigate class="text-white hover:text-black">Home</a>
                    </li>
                    <li class="py-2">
                        <a href="{{ route('employers') }}" wire:navigate
                            class="text-white hover:text-black">Employers</a>
                    </li>
                    <li class="py-2">
                        <a href="{{ route('about-us') }}" class="text-white hover:text-black" wire:navigate>About
                            us</a>
                    </li>
                    <li class="py-2">
                        <a href="{{ route('contact.index') }}" wire:navigate
                            class="text-white hover:text-black">Contact
                            us</a>
                    </li>
                    <li class="py-2">
                        <a href="{{ route('faqs') }}" wire:navigate class="text-white hover:text-black">Faqs</a>
                    </li>

                </ul>
            </div>
        </div>


        <div class="mt-8 border-t border-white pt-8 md:flex md:items-center md:justify-between">
            <div class="flex space-x-6 md:order-2">

                <a href="{{ route('privacy')}}" class="text-white hover:text-black">
                    Privacy and Policy
                </a>


            </div>
            <p class="mt-8 text-xs leading-5 text-white font-semibold md:order-1 md:mt-0">&copy; {{ date('Y') }}
                {{ config('app.name') }}.
                All
                rights reserved.</p>
        </div>
    </div>
</footer>
