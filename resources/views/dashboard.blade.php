<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="sm:p-10 p-3 h-max">
        <div class="grid grid-rows-1 gap-4 md:grid-cols-2 h-max">
            <div class="bg-white rounded-xl h-max">
                <div
                    class="bg-pink-500 h-40 rounded-xl m-4 hover:bg-pink-600 active:bg-pink-700 flex justify-center items-center focus:outline-none focus:ring focus:ring-pink-300">
                    <div class=" text-center  align-middle">
                        <h1 class="font-extrabold text-7xl">DSG</h1>
                    </div>
                </div>
                <div class="items-center text-center">
                    <h1>MOBILE</h1>
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl">
                <figure class="px-10 pt-10">
                    <img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes" class="rounded-xl">
                </figure>
                <div class="items-center text-center">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
