<template>
    <div class="text-gray-800 ">
        <div
            :class="
                checkIfWeAreOnSamePage('')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl"
        >
            <Link href=""> T-shirt </Link>
        </div>
        <div
            :class="
                checkIfWeAreOnSamePage('')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl"
        >
            <Link href=""> Belts </Link>
        </div>
        <div 
            :class="
                checkIfWeAreOnSamePage('')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl">
            <Link
                href=""
        >
                Jackets
            </Link>
        </div>
        <div 
            :class="
                checkIfWeAreOnSamePage('')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl">
            <Link
                href=""
        >
                Shirts
            </Link>
        </div>
        <div 
        :class="
                checkIfWeAreOnSamePage('')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl"
            >
            <Link
                href=""
        >
                Down Jackets
            </Link>
        </div>
        <div 
        :class="
                checkIfWeAreOnSamePage('')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl">
            <Link
                href=""
            >
                Sweater
            </Link>
        </div>
    
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },

    methods: {
        checkIfWeAreOnSamePage(url) {
            console.log(url);
            return window.location.pathname === url;
        },
    },
};


</script>