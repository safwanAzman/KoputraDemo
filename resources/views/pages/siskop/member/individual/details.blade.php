<x-form.basic-form action="saveDetails">
    <x-slot name="content">
        <x-general.grid mobile="1" gap="5" sm="1" md="1" lg="1" xl="1" class="col-span-6">
            <div class="">
                <!-- Start: Membership information Information-->
                <x-general.card class="bg-white shadow-lg p-4">
                    <h1 class="font-semibold text-yellow-400">Dealership Information</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="3" class="mt-5">
                        <div class="mb-4">
                            <x-form.input label="Dealership No" value="{{$customer->ref_no}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Type" value="customer.type_id" default="no">
                                @forelse ($types as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Status" value="customer.status_id" default="no">
                                @forelse ($statuses as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Apply Date" value="{{isset($customer->apply_date) ? date('Y-m-d',strtotime($customer->apply_date)) : ''}}"/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Start Date" value="{{isset($customer->start_date) ? date('Y-m-d',strtotime($customer->start_date)) : ''}}"/>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="End Date" value="{{isset($customer->end_date) ? date('Y-m-d',strtotime($customer->end_date)) : ''}}"/>
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Individual Information-->

                <!-- Start: Customer Information-->
                <x-general.card class="bg-white shadow-lg p-4 mt-5">
                    <h1 class="font-semibold text-yellow-400">Dealer Information</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="2" class="mt-5">
                        <div class="mb-4">
                            <x-form.dropdown label="Title" value="customer.title_id" default="no">
                                @forelse ($titles as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>
                        <div class="mb-4">
                            <x-form.input label="Name" value="{{$customer->name}}" />
                        </div>
                        <div class="mb-4">
                            <x-form.dropdown label="Identity Type" value="customer.identity_type_id" default="no">
                                @forelse ($identity_types as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Identity No"  value="{{$customer->identity_no}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Other Identity Type" value="customer.other_identity_type_id" default="no">
                                @forelse ($other_identity_types as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Other ID" value="{{$customer->other_identity_no}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="email" label="Email" value="{{$customer->email}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Phone" value="{{$customer->phone}}" />
                        </div>

                        <div>
                            <x-form.dropdown label="Gender" value="customer.gender_id" default="no">
                                @forelse ($genders as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Birth Date" value="{{isset($customer->birth_date) ? date('Y-m-d',strtotime($customer->birth_date)) : ''}}"/>
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Race" value="customer.race_id" default="no">
                                @forelse ($races as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.input type="text" label="Bumiputra Status" value="{{$bumi}}"  />
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Language" value="customer.language_id" default="no">
                                @forelse ($languages as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Marital" value="customer.marital_id" default="no">
                                @forelse ($maritals as $item)
                                    <option value="{{$item->id}}">{{$item->description}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>

                        <div class="mb-4">
                            <x-form.dropdown label="Citizenship" value="customer.country_id" default="no">
                                @forelse ($countries as $item)
                                    <option value="{{$item['id']}}">{{$item['description']}}</option>
                                @empty @endforelse
                            </x-form.dropdown>
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Customer Information-->
            </div>

            <div class="">
                <!-- Start: Contribution Information-->
                <x-general.card class="bg-white shadow-lg p-4 mt-5">
                    <h1 class="font-semibold text-yellow-400">Sales Transactions</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="3" class="mt-5">
                        <div class="mb-4">
                            <x-form.input  label="Total" value="{{number_format($customer->total_contribution,2,'.',',')}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Last Sales Amount" value="{{number_format($customer->last_payment_amount,2,'.',',')}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Last Sales Date" value="{{isset($customer->last_payment_date) ? date('Y-m-d',strtotime($customer->last_payment_date)) : ''}}"/>
                        </div>

                        <div class="mb-4">
                            {{-- <x-form.input label="Monthly" value="{{number_format($customer->monthly_contribution,2,'.',',')}}" /> --}}
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Last Credited Amount" value="{{number_format($customer->last_withdraw_amount,2,'.',',')}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Last Credited Date" value="{{isset($customer->last_withdraw_date) ? date('Y-m-d',strtotime($customer->last_withdraw_date)) : ''}}"/>
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Share Information-->

                <!-- Start: Share Information-->
                <x-general.card class="bg-white shadow-lg p-4 mt-5">
                    <h1 class="font-semibold text-yellow-400">Commission Information</h1>
                    <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="3" class="mt-5">
                        <div class="mb-4">
                            <x-form.input label="Total" value="{{number_format($customer->total_share,2,'.',',')}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Last Commission Rewards (RM)" value="{{number_format($customer->last_purchase_amount,2,'.',',')}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Last Rewards Date" value="{{isset($customer->last_purchase_date) ? date('Y-m-d',strtotime($customer->last_purchase_date)) : ''}}"/>
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Total Gold Bar" value="{{number_format($customer->monthly_share,2,'.',',')}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input label="Last Gold Bar Rewards" value="{{number_format($customer->last_selling_amount,2,'.',',')}}" />
                        </div>

                        <div class="mb-4">
                            <x-form.input type="date" label="Last Rewards Date" value="{{isset($customer->last_selling_date) ? date('Y-m-d',strtotime($customer->last_selling_date)) : ''}}"/>
                        </div>
                    </x-general.grid>
                </x-general.card>
                <!-- End: Share Information-->
            </div>
        </x-general.grid>
    </x-slot>

    <x-form.submit-cancel-button class="pt-5 mt-8 border-t border-gray-200" cancel="Cancel" submit="Save"  cancelpage="{{route('siskop.member.index')}}"/>
</x-form.basic-form>
{{-- <div>details</div> --}}
