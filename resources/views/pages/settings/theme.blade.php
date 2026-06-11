<x-layouts.app title="Customize theme">
    <div class="max-w-5xl mx-auto space-y-8 animate-fadeIn">
        
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 pb-5 border-b border-gray-200">
            <div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Theme Customization</h1>
            <p class="text-sm text-gray-500 mt-1">Configure and tune your application UI layout matrices, branding telemetry, and color properties.</p>
            </div>
            <div class="flex items-center gap-3">
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition-colors">
                Reset Defaults
            </button>
            <button type="button" class="px-4 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-xl hover:bg-blue-700 shadow-sm shadow-blue-100 transition-colors">
                Save Configurations
            </button>
            </div>
        </div>

        <form class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-8">
            
            <section class="bg-white border border-gray-100 rounded-2xl shadow-sm p-6 space-y-6">
                <div class="flex items-center gap-3 pb-4 border-b border-gray-50">
                <div class="p-2 bg-blue-50 text-blue-600 rounded-xl">
                    <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-gray-900">Application Frame Layout</h3>
                    <p class="text-xs text-gray-400">Set up the display parameters for core system shells.</p>
                </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Base Theme Engine</label>
                    <div class="grid grid-cols-2 gap-3">
                    <label class="relative flex flex-col items-center justify-center p-4 border border-blue-600 bg-blue-50/30 rounded-xl cursor-pointer transition-all">
                        <input type="radio" name="base_mode" value="light" class="sr-only" checked />
                        <span class="text-sm font-medium text-blue-600">Light System</span>
                    </label>
                    <label class="relative flex flex-col items-center justify-center p-4 border border-gray-200 hover:border-gray-300 rounded-xl cursor-pointer transition-all">
                        <input type="radio" name="base_mode" value="dark" class="sr-only" />
                        <span class="text-sm font-medium text-gray-600">Dark System</span>
                    </label>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Layout Densities</label>
                    <select class="w-full px-3 py-2.5 text-sm bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500 transition-colors">
                    <option value="fluid">Fluid Canvas (Full-Width)</option>
                    <option value="boxed">Boxed Layout Framework</option>
                    </select>
                </div>
                </div>
            </section>

            <section class="bg-white border border-gray-100 rounded-2xl shadow-sm p-6 space-y-6">
                <div class="flex items-center gap-3 pb-4 border-b border-gray-50">
                <div class="p-2 bg-purple-50 text-purple-600 rounded-xl">
                    <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 01-1.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a15.997 15.997 0 01-4.764-4.648" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-gray-900">Color Matrix & Accents</h3>
                    <p class="text-xs text-gray-400">Map structural digital chroma metrics to targeted global element selectors.</p>
                </div>
                </div>

                <div class="space-y-6">
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Accent Blueprint (Primary Hue)</label>
                    <div class="flex flex-wrap gap-3">
                    <button type="button" class="w-10 h-10 rounded-xl bg-blue-600 ring-4 ring-blue-100 flex items-center justify-center text-white">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                    </button>
                    <button type="button" class="w-10 h-10 rounded-xl bg-purple-600 hover:scale-105 transition-transform"></button>
                    <button type="button" class="w-10 h-10 rounded-xl bg-emerald-600 hover:scale-105 transition-transform"></button>
                    <button type="button" class="w-10 h-10 rounded-xl bg-rose-600 hover:scale-105 transition-transform"></button>
                    <button type="button" class="w-10 h-10 rounded-xl bg-amber-500 hover:scale-105 transition-transform"></button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Sidebar Canvas Fill</label>
                    <div class="flex gap-2">
                        <div class="relative flex-1">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 text-sm">#</span>
                        <input type="text" name="sidebar_color" value="FFFFFF" class="w-full pl-7 pr-3 py-2 text-sm bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500 font-mono" />
                        </div>
                        <input type="color" value="#FFFFFF" class="w-10 h-9 p-0.5 bg-white border border-gray-200 rounded-xl cursor-pointer" />
                    </div>
                    </div>

                    <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Global Heading Color</label>
                    <div class="flex gap-2">
                        <div class="relative flex-1">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 text-sm">#</span>
                        <input type="text" name="heading_color" value="111827" class="w-full pl-7 pr-3 py-2 text-sm bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500 font-mono" />
                        </div>
                        <input type="color" value="#111827" class="w-10 h-9 p-0.5 bg-white border border-gray-200 rounded-xl cursor-pointer" />
                    </div>
                    </div>

                </div>
                </div>
            </section>

            <section class="bg-white border border-gray-100 rounded-2xl shadow-sm p-6 space-y-6">
                <div class="flex items-center gap-3 pb-4 border-b border-gray-50">
                <div class="p-2 bg-amber-50 text-amber-600 rounded-xl">
                    <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-gray-900">Branded Digital Graphics</h3>
                    <p class="text-xs text-gray-400">Manage vector files and graphics mapped to navigation channels.</p>
                </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="space-y-2">
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Primary System Brand Logo</label>
                    <div class="border-2 border-dashed border-gray-200 hover:border-blue-400 rounded-xl p-4 transition-colors flex flex-col items-center justify-center bg-gray-50/50 cursor-pointer group text-center">
                    <svg class="w-8 h-8 text-gray-400 group-hover:text-blue-500 transition-colors mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>
                    <span class="text-xs font-medium text-gray-700">Click to upload brand logo SVG</span>
                    <span class="text-[10px] text-gray-400 mt-1">Vectors or high res transparent files max 2MB</span>
                    </div>
                </div>

                <div class="flex flex-col justify-between p-4 bg-gray-50 border border-gray-100 rounded-xl">
                    <div class="space-y-1">
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider block">Currently Rendered Asset</span>
                    <p class="text-[11px] text-gray-400">File structure identity stream reference metrics.</p>
                    </div>
                    <div class="bg-white border border-gray-200/60 p-4 rounded-xl flex items-center justify-center my-3 min-h-[64px]">
                    <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="Active Viewport Logo Preview" class="h-8 max-w-full object-contain object-left" />
                    </div>
                    <div class="flex justify-end">
                    <button type="button" class="text-xs font-medium text-red-600 hover:text-red-700">Delete Image</button>
                    </div>
                </div>

                </div>
            </section>

            </div>

            <div class="space-y-6">
            
            <div class="sticky top-24 space-y-4">
                <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">Live Simulator Telemetry</span>
                <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-md text-xxs font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">
                    <span class="w-1 h-1 bg-emerald-500 rounded-full animate-pulse"></span> Synchronized
                </span>
                </div>

                <div class="w-full bg-white border border-gray-100 rounded-2xl shadow-md overflow-hidden flex flex-col h-[380px]">
                
                <div class="h-12 border-b border-gray-100 flex items-center justify-between px-4 bg-white flex-shrink-0">
                    <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-gray-200 rounded-full"></div>
                    <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="Logo Mock" class="h-4 w-auto opacity-75" />
                    </div>
                    <div class="flex items-center gap-1.5">
                    <div class="w-4 h-4 bg-gray-100 rounded-full"></div>
                    <div class="w-4 h-4 bg-gray-100 rounded-full"></div>
                    </div>
                </div>

                <div class="flex-1 flex overflow-hidden">
                    
                    <div id="mockSidebar" class="w-16 border-r border-gray-100 bg-white p-2 flex flex-col gap-2 transition-all duration-300">
                    <div class="h-3 bg-blue-50 rounded w-4/5"></div>
                    <div class="space-y-1.5 mt-2">
                        <div class="h-2 bg-blue-600/10 rounded w-full"></div>
                        <div class="h-2 bg-gray-50 rounded w-5/6"></div>
                        <div class="h-2 bg-gray-50 rounded w-4/6"></div>
                    </div>
                    </div>

                    <div class="flex-1 bg-gray-50 p-4 space-y-3 overflow-y-auto">
                    <div class="space-y-1">
                        <div id="mockHeading" class="h-4 bg-gray-900 rounded w-3/4 transition-colors"></div>
                        <div class="h-2 bg-gray-300 rounded w-1/2 opacity-50"></div>
                    </div>

                    <div class="grid grid-cols-2 gap-2 pt-2">
                        <div class="bg-white border border-gray-100 rounded-lg p-2 space-y-1.5">
                        <div class="w-3 h-3 bg-blue-600 rounded-sm"></div>
                        <div class="h-1.5 bg-gray-200 rounded w-5/6"></div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-lg p-2 space-y-1.5">
                        <div class="w-3 h-3 bg-blue-600 rounded-sm"></div>
                        <div class="h-1.5 bg-gray-200 rounded w-4/6"></div>
                        </div>
                    </div>
                    </div>

                </div>
                </div>

                <p class="text-xxs text-gray-400 text-center px-4 leading-relaxed">
                The viewport preview updates structural color metrics matching current input state parameters before committing changes to production database architectures.
                </p>
            </div>

            </div>

        </form>
        </div>

        @push('scripts')
            <script src="{{ asset("assets/scripts/v1/theme-simulator.js") }}"></script>
        @endpush
</x-layouts.app>