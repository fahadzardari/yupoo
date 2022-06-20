<template>
    <div class="text-gray-800 md:block hidden">
        <!-- 'belts' => $this->getBelts(),
            'downjackets' => $this->getDownJackets(),
            'jackets' => $this->getJackets(),
            'shirts' => $this->getShirts(),
            'sweaters' => $this->getSweaters(),
            'tshirts' => $this->getTShirts() -->
        <div
            :class="
                checkIfWeAreOnSamePage('/category/belts')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl"
        >
            <Link href="/category/belts"> 皮带 The belt </Link>
        </div>
        <div
            :class="
                checkIfWeAreOnSamePage('/category/downjackets')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl"
        >
            <Link href="/category/downjackets"> 羽绒服Down jacket </Link>
        </div>
        <div
            :class="
                checkIfWeAreOnSamePage('/category/jackets')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl"
        >
            <Link href="/category/jackets"> 夹克货稳 JACKET </Link>
        </div>
        <div
            :class="
                checkIfWeAreOnSamePage('/category/shirts')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl"
        >
            <Link href="/category/shirts"> 衬衫 shirt </Link>
        </div>
        <div
            :class="
                checkIfWeAreOnSamePage('/category/sweaters')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl"
        >
            <Link href="/category/sweaters"> 毛衣Sweater </Link>
        </div>
        <div
            :class="
                checkIfWeAreOnSamePage('/category/tshirts')
                    ? ' text-green-600'
                    : ' text-gray-700'
            "
            class="w-full py-4 m-2 text-center bg-gray-100 border-2 border-gray-300 rounded text-1xl"
        >
            <Link href="/category/tshirts"> 圆领短袖 T-shirt </Link>
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
            return window.location.pathname === url;
        },
    },
};
</script>
