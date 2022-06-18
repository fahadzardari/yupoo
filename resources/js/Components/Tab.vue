<template>

    <div class="tab flex flex-row bg-gray-200 px-8 pt-14 " v-if="highlight === 'home'">
        <button class=" pb-4 border border-b-2 mr-3 text-green-500 text-md border-b-green-400" @click="highlight = 'home'">Home</button>
        <button class="text-md pb-4" @mouseover="show = true" @mouseleave="show = false" @click="highlight = 'categories'">All Categories</button>


    </div>
    <div class="tab flex flex-row bg-gray-200 px-8 pt-14 " v-if="highlight === 'categories'">
        <button class=" pb-4 mr-3" @click="highlight = 'home'">Home</button>
        <button class="text-md pb-4 border border-b-2 mr-3 text-green-500 text-md border-b-green-400"
            @mouseover="show = true" @mouseleave="show = false" @click="highlight = 'categories'">All Categories</button>


    </div>


    <div class="dropdown-menu" v-show="show" @mouseover="show = true" @mouseout="show = false">
        <div>
            <p>this will be the dropdown-menu</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: false,
        }
    },
    props: {
        highlight: {
            type: String,
            default: 'home'
        }
    }




}

</script>