<x-form.basic-form action="saveDetails">
    <x-slot name="content">
        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
            <div class="">
                <!-- Start: Membership information Information-->
                <x-general.card class="bg-white shadow-lg p-4">
                    <h1 class="font-semibold text-indigo-500">Membership Information</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="3" class="mt-5">
                        <div class="mb-4">
                            <x-form.input label="Membership No." value="{{$customer['ref_no']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Type" value="{{$customer['type_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Status" value="{{$customer['status_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Apply Date" value="{{$customer['apply_date']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Start Date" value="{{$customer['start_date']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="End Date" value="{{$customer['end_date']}}" />
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Individual Information-->

                <!-- Start: Customer Information-->
                <x-general.card class="bg-white shadow-lg p-4 mt-5">
                    <h1 class="font-semibold text-indigo-500">Member Information</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="2" class="mt-5">
                        <div class="mb-4">
                            <x-form.input label="Title" value="{{$customer['title_id']}}" />
                        </div>
                        <div class="mb-4">
                            <x-form.input label="Name" value="{{$customer['name']}}" />
                        </div>
                        <div class="mb-4">
                            <x-form.input label="Identity Type" value="{{$customer['identity_type_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Identity No"  value="{{$customer['identity_no']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Other ID Type" value="{{$customer['other_identity_type_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Other ID" value="{{$customer['other_identity_no']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="email" label="Email" value="{{$customer['email']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Phone" value="{{$customer['phone']}}" />
                        </div>

                        <div>
                            <x-form.input label="Gender" value="{{$customer['gender_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Birth Date" value="{{$customer['birth_date']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Race" value="{{$customer['race_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Bumiputra Status" value="YES"  />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Languages" value="{{$customer['language_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Marital" value="{{$customer['marital_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Citizenship" value="{{$customer['country_id']}}" />
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Customer Information-->
            </div>

            <div class="">
                <!-- Start: Employer Information-->
                <x-general.card class="bg-white shadow-lg p-4 mt-5">
                    <h1 class="font-semibold text-indigo-500">Employer Information</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="2" class="mt-5">
                        <div class="mb-4">
                            <x-form.input label="Company Name" value="{{$customer['current_employer_name']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Company Address" value="{{$customer['current_employer_address']}}" />
                            {{-- <x-form.address-input class="" label="Address" value1="address1" value2="address2" value3="address3" value4="town" value5="postcode" condition=""/>  --}}
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Company Phone Number" value="{{$customer['current_employer_phone']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Company Fax Number" value="{{$customer['current_employer_fax']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Job Group" value="{{$customer['current_employment_group_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Job Status" value="{{$customer['current_employment_status_id']}}" />
                        </div>


                        <div class="mb-4">
                            <x-form.input label="Position" value="{{$customer['current_employment_position']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Employment Date" value="{{$customer['current_employment_date']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Salary" value="{{$customer['current_salary']}}" />
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Employer Information-->

                <!-- Start: Third Party Information-->
                <x-general.card class="bg-white shadow-lg p-4 mt-5">
                    <h1 class="font-semibold text-indigo-500">Third Party Information</h1>

                    <x-general.card class="bg-white shadow-lg p-4 mt-5">
                        <h1 class="font-semibold text-indigo-500">Mutiara Plus</h1>
                        <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="2" class="mt-5">
                            <div class="mb-4">
                                <x-form.input label="Pay By" {{--value="{{$customer['current_employer_name']}}"--}} />
                            </div>

                            <div class="mb-4">
                                <x-form.input label="Branch" {{--value="{{$customer['current_employer_name']}}" --}} />
                            </div>

                            <div class="mb-4">
                                <x-form.input label="Amount" {{--value="{{$customer['current_employer_name']}}"--}} />
                            </div>

                        </x-general.grid>
                    </x-general.card>

                    <x-general.card class="bg-white shadow-lg p-4 mt-5">
                        <h1 class="font-semibold text-indigo-500">Takaful Khairat Kematian</h1>
                        <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="2" class="mt-5">
                            <div class="mb-4">
                                <x-form.input label="Pay By" {{--value="{{$customer['current_employer_name']}}"--}} />
                            </div>

                            <div class="mb-4">
                                <x-form.input label="Branch" {{--value="{{$customer['current_employer_name']}}" --}} />
                            </div>

                            <div class="mb-4">
                                <x-form.input label="Amount" {{--value="{{$customer['current_employer_name']}}"--}} />
                            </div>

                        </x-general.grid>
                    </x-general.card>
                </x-general.card>
                <!-- End: Third Party Information-->

                <!-- Start: Contribution Information-->
                <x-general.card class="bg-white shadow-lg p-4 mt-5">
                    <h1 class="font-semibold text-indigo-500">Contribution Information</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="3" class="mt-5">
                        <div class="mb-4">
                            <x-form.input  label="Total" value="{{$customer['total_contribution']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Last Payment Amount" value="{{$customer['last_payment_amount']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Last Payment Date" value="{{$customer['last_payment_date']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Monthly" value="{{$customer['monthly_contribution']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Last Withdraw Amount" value="{{$customer['last_withdraw_amount']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Last Withdraw Date" value="{{$customer['last_withdraw_date']}}" />
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Share Information-->

                <!-- Start: Share Information-->
                <x-general.card class="bg-white shadow-lg p-4 mt-5">
                    <h1 class="font-semibold text-indigo-500">Share Information</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="3" class="mt-5">
                        <div class="mb-4">
                            <x-form.input label="Total" value="{{$customer['total_share']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Last Purchase Amount" value="{{$customer['last_purchase_amount']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Last Purchase Date" value="{{$customer['last_purchase_date']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Monthly" value="{{$customer['monthly_share']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Last Selling Amount" value="{{$customer['last_selling_amount']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Last Selling Date" value="{{$customer['last_selling_date']}}" />
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Share Information-->

                <!-- Start: Business Information-->
                <x-general.card class="bg-white shadow-lg  p-4 mt-5 hidden">
                    <h1 class="font-semibold text-indigo-500">Business Information</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="2" class="mt-5">
                        <div class="mb-4">
                            <x-form.input label="Entity Type" value="{{$customer['entity_type_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="BNM Customer Type" value="{{$customer['bnm_customer_type_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Business Activity Code" value="{{$customer['business_activity_code_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Busines Type" value="{{$customer['business_type_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Franchisor Name" value="{{$customer['franchisor_name']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Brand Name" value="{{$customer['brand_name']}}" />
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Business Information-->

                <!-- Start: Risk Ranting Details-->
                <x-general.card class="bg-white shadow-lg  p-4 mt-5 hidden">
                    <h1 class="font-semibold text-indigo-500">Risk Ranting Details</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="2" class="mt-5">
                        <div class="mb-4">
                            <x-form.input label="Risk Rating" value="{{$customer['risk_rating']}}" />
                        </div>
                        <div class="mb-4">
                            <x-form.input type="date" label="Risk Rating Date" value="{{$customer['risk_rating_date']}}" />
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Risk Ranting Details-->

                <!-- Start: Customer Under Watch List-->
                <x-general.card class="bg-white shadow-lg p-4 mt-5 hidden">
                    <h1 class="font-semibold text-indigo-500">Customer Under Watch List</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="2" class="mt-5">
                        <div class="mb-4">
                            <x-form.input label="Watch list Indicator" value="{{$customer['watchlist_type_id']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Type" value="{{$customer['review_frequency_id']}}" />
                        </div>

                        <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-1">
                            <x-form.input type="date" class="mb-4" label="Start Date" value="{{$customer['watchlist_start_date']}}" />
                            <x-form.input type="date" class="mb-4" label="End Date" value="{{$customer['watchlist_end_date']}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Remarks" value="{{$customer['watchlist_remarks']}}" />
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Customer Under Watch List-->

            </div>
        </x-general.grid>
    </x-slot>

    <x-form.submit-cancel-button class="pt-5 mt-8 border-t border-gray-200" cancel="Cancel" submit="Save"  cancelpage="{{route('siskop.member.index')}}"/>
</x-form.basic-form>
{{-- <div>details</div> --}}
