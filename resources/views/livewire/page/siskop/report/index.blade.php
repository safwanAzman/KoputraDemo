<div>
    <div class="h-full">
        <div class="absolute inset-0 overflow-hidden">
            <section class="absolute inset-y-0 left-0  max-w-full flex" aria-labelledby="slide-over-heading">
                <div class="relative w-screen max-w-md">

                    <div data-aos="fade-right" class="h-full flex flex-col py-6 pt-0 bg-white shadow-xl overflow-auto z-50">
                        <div class="flex-shrink-0 relative overflow-hidden bg-yellow-400 ">
                            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                                style="transform: scale(1.5); opacity: 0.1;">
                                <rect x="159.52" y="175" width="152" height="152" rx="8"
                                    transform="rotate(-45 159.52 175)" fill="white" />
                                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                                    fill="white" />
                            </svg>
                            <div class="relative p-4 flex items-center">
                                <h2 class="text-base font-semibold text-white uppercase">
                                    List Of Report
                                </h2>
                            </div>
                        </div>
                        <div class="mt-6 relative flex-1 px-4 sm:px-6">
                            <!-- Replace with your content -->
                            <div class="absolute inset-0 px-4 sm:px-6">
                                <div class="h-full border-2  border-yellow-300 leading-6" aria-hidden="true">
                                    <div class="">
                                        <a href="{{route('siskop.report.listPositionContribution_report')}}"
                                            class="text-sm text-gray-500 font-semibold py-2 px-4 inline-flex items-center w-full hover:text-yellow-400">
                                                <x-heroicon-o-document-text  class=" w-4 h-4 mr-2" />
                                        <span>List Of Current Position Sales Transaction</span>
                                        </a>

                                        <a href="{{route('siskop.report.contributionshare_projection')}}"
                                            class="text-sm text-gray-500 font-semibold py-2 px-4 inline-flex items-center w-full hover:text-yellow-400">
                                                <x-heroicon-o-chart-pie  class=" w-4 h-4 mr-2" />
                                        <span>Sales Transactions & Commission Rewards Projection</span>
                                        </a>
                                        <a href="{{route('siskop.report.member_summary')}}"
                                            class="text-sm text-gray-500 font-semibold py-2 px-4 inline-flex items-center w-full hover:text-yellow-400">
                                                <x-heroicon-o-chart-pie  class=" w-4 h-4 mr-2" />
                                        <span>Dealers Summary</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- header -->
    <div class="absolute top-0 left-0 right-0" style="z-index: -1;">
        <x-general.header bgimg=""  title=""/>
    </div>
</div>
