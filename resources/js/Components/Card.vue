<template>
      <Link :href="item_details_url">
      <div class="card shadow-lg rounded-md relative text-center mx-2 ">
          <p class="absolute float-right bottom-6 right-0 text-white font-bold">({{total_images_in_album}})</p>
                <img
            :src="url"
            width="170" height=200px alt="">
            <label for="cat" class="text-center">{{name}}</label>

            </div>

    </Link>


</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'
export default{
    components: {
        Link
    },
    data(){
        return{
            
        }
    },
    props: {
        url: {
            type: String,
            default:' '
        },
        item_details_url:{
            type: String,
            default:' '
        },
        total_images_in_album: {
            type: Number,
            default: 0
        },
        name: {
            type: String,
            default: 'default.jpg'
        }
    }




}

</script>