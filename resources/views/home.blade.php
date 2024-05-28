@extends('layouts.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="block text-6xl font-bold text-[#FFFFFF] sm:text-7xl lg:text-9xl font-montserrat">Imagination Being Reality</h1>
        <p class="mt-9 text-[#D3D8E8] font-poppins">Professional, Fancy and Artistic Designs.</p>
    </div>
    <div class="my-6">
        <div class="max-w-[35rem] lg:max-w-6xl mx-auto bg-[#9637d1] rounded-lg">
            <div class="grid md:grid-cols-2 items-center gap-16 sm:p-10 p-4 font-[sans-serif]">
                <div>
                    <h1 class="text-4xl font-extrabold text-white font-montserrat">Get in Touch</h1>
                    <p class="text-sm text-[#D3D8E8] mt-3 font-poppins">Share your Idea we build what you had in Mind.</p>
                    <ul class="mt-12 space-y-8">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff'
                                viewBox="0 0 479.058 479.058">
                                <path
                                    d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                    data-original="#000000" />
                            </svg>
                            <a href="javascript:void(0)" class="text-white text-sm ml-3 font-poppins">
                                <strong>info@digitalgearjunction.africa</strong>
                            </a>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff'
                                viewBox="0 0 482.6 482.6">
                                <path
                                    d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z"
                                    data-original="#000000"></path>
                            </svg>
                            <a href="javascript:void(0)" class="text-white text-sm ml-3 font-poppins">
                                <strong>+255 746 728 264</strong>
                            </a>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff'
                                viewBox="0 0 368.16 368.16">
                                <path
                                    d="M184.08 0c-74.992 0-136 61.008-136 136 0 24.688 11.072 51.24 11.536 52.36 3.576 8.488 10.632 21.672 15.72 29.4l93.248 141.288c3.816 5.792 9.464 9.112 15.496 9.112s11.68-3.32 15.496-9.104l93.256-141.296c5.096-7.728 12.144-20.912 15.72-29.4.464-1.112 11.528-27.664 11.528-52.36 0-74.992-61.008-136-136-136zM293.8 182.152c-3.192 7.608-9.76 19.872-14.328 26.8l-93.256 141.296c-1.84 2.792-2.424 2.792-4.264 0L88.696 208.952c-4.568-6.928-11.136-19.2-14.328-26.808-.136-.328-10.288-24.768-10.288-46.144 0-66.168 53.832-120 120-120s120 53.832 120 120c0 21.408-10.176 45.912-10.28 46.152z"
                                    data-original="#000000"></path>
                                <path
                                    d="M184.08 64.008c-39.704 0-72 32.304-72 72s32.296 72 72 72 72-32.304 72-72-32.296-72-72-72zm0 128c-30.872 0-56-25.12-56-56s25.128-56 56-56 56 25.12 56 56-25.128 56-56 56z"
                                    data-original="#000000"></path>
                            </svg>
                            <a href="javascript:void(0)" class="text-white text-sm ml-3 font-poppins">
                                <strong>Nssf House Shinyanga</strong>
                            </a>
                        </li>
                    </ul>
                    <ul class="flex mt-12 space-x-4">
                        <li
                            class="bg-[#0D1224] hover:bg-[#0D1224e2] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="https://github.com/unctom">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18"
                                    fill='#fff' viewBox="0 0 24 24">
                                    <path
                                        d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li
                            class="bg-[#0D1224] hover:bg-[#0D1224e2] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <a href="https://shorturl.at/H6yGP">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill='#fff'
                                    viewBox="0 0 511 512">
                                    <path
                                        d="M111.898 160.664H15.5c-8.285 0-15 6.719-15 15V497c0 8.285 6.715 15 15 15h96.398c8.286 0 15-6.715 15-15V175.664c0-8.281-6.714-15-15-15zM96.898 482H30.5V190.664h66.398zM63.703 0C28.852 0 .5 28.352.5 63.195c0 34.852 28.352 63.2 63.203 63.2 34.848 0 63.195-28.352 63.195-63.2C126.898 28.352 98.551 0 63.703 0zm0 96.395c-18.308 0-33.203-14.891-33.203-33.2C30.5 44.891 45.395 30 63.703 30c18.305 0 33.195 14.89 33.195 33.195 0 18.309-14.89 33.2-33.195 33.2zm289.207 62.148c-22.8 0-45.273 5.496-65.398 15.777-.684-7.652-7.11-13.656-14.942-13.656h-96.406c-8.281 0-15 6.719-15 15V497c0 8.285 6.719 15 15 15h96.406c8.285 0 15-6.715 15-15V320.266c0-22.735 18.5-41.23 41.235-41.23 22.734 0 41.226 18.495 41.226 41.23V497c0 8.285 6.719 15 15 15h96.403c8.285 0 15-6.715 15-15V302.066c0-79.14-64.383-143.523-143.524-143.523zM466.434 482h-66.399V320.266c0-39.278-31.953-71.23-71.226-71.23-39.282 0-71.239 31.952-71.239 71.23V482h-66.402V190.664h66.402v11.082c0 5.77 3.309 11.027 8.512 13.524a15.01 15.01 0 0 0 15.875-1.82c20.313-16.294 44.852-24.907 70.953-24.907 62.598 0 113.524 50.926 113.524 113.523zm0 0"
                                        data-original="#000000" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#0D1224] p-6 rounded-lg">
                    <p class="text-sm font-semibold text-[#D3D8E8]">Share your Thoughts...</p>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" id="success-message">
                            <p class="font-poppins text-green-500">{{ session()->get('success') }}!!</p>
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" id="error-message">
                            <p class="font-poppins text-red-500">{{ session()->get('error') }}</p>
                        </div>
                    @endif
                    <form class="mt-8 space-y-4" action="{{ route('send-email') }}" method="post">
                        @csrf
                        @method('POST')
                        <input type='text' placeholder='Name'
                            class="w-full rounded-md py-3 px-4 text-sm outline-[#0D1224]" name="name" />
                        <input type='email' placeholder='Email'
                            class="w-full rounded-md py-3 px-4 text-sm outline-[#0D1224]" name="email" />
                        <input type='text' placeholder='Subject'
                            class="w-full rounded-md py-3 px-4 text-sm outline-[#0D1224]" name="subject" />
                        <textarea placeholder='Message' rows="6" class="w-full rounded-md px-4 text-sm pt-3 outline-[#0D1224]"
                            name="message"></textarea>
                        <button type='submit'
                            class="text-white bg-[#385fe0] hover:bg-[#385fe02e] font-semibold rounded-md text-sm px-4 py-3 flex items-center justify-center w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff'
                                class="mr-2" viewBox="0 0 548.244 548.244">
                                <path fill-rule="evenodd"
                                    d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                                    clip-rule="evenodd" data-original="#000000" />
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== END MAIN CONTENT ========== -->
@endsection
