<template>
    <div v-if="show" class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div @click.self="close_modal()" class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        <div
            class="modal-container  left-10 bg-white w-90 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 ml-10 mr-10  px-6">
                <div class="flex justify-between pb-3 border-b-100 border-b-4 border-gray-100">
                    <p class="text-2xl font-bold text-center">New Recording </p>
                    <button type="button" class="text-2xl text-black-200" @click="isOpen = false">x</button>
                </div>
                <form class="mt-6">
                    <div>
                        <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">Save the recording
                            in</label>
                        <select type="text"
                            class="block w-full px-4 py-2 mt-2  bg-gray-100 border border-gray-300 rounded-md">
                            <option selected class="text-black-200 px-4 py-2 mt-2 ">select a project</option>
                        </select>
                    </div>

                    <div class="flex justify-between mt-6 text-black-800">
                        <div>Recording Screen</div>
                        <div><label class="inline-flex relative items-center cursor-pointer">
                                <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                                <div class="w-10 h-6 bg-gray-200 peer-focus:outline-none
                 peer-focus:ring-4 
                 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 rounded-full
                 peer dark:bg-gray-700 
                 peer-checked:after:translate-x-full
                 peer-checked:after:border-white after:content-['']
                after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300
                after:border after:rounded-full after:h-5 after:w-5 after:transition-all 
                dark:border-gray-600 peer-checked:bg-green-600"></div>
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-between mt-6">
                        <div>Recording Camera</div>

                        <label class="inline-flex relative items-center cursor-pointer">
                            <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4
                 peer-focus:ring-green-200 dark:peer-focus:green-600 rounded-full
                  peer dark:bg-gray-700 peer-checked:after:translate-x-full
                   peer-checked:after:border-white after:content-[''] after:absolute 
                   after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300
                    after:border after:rounded-full after:h-5 after:w-5 after:transition-all 
                    peer-checked:bg-green-600">
                            </div>
                        </label>
                    </div>

                    <div class="flex justify-between mt-6">
                        <div>Recording mic</div>
                        <label class="inline-flex relative items-center cursor-pointer">
                            <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none 
                peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 
                rounded-full peer dark:bg-gray-700  peer-checked:after:translate-x-full
 peer-checked:after:border-white after:content-['']   after:absolute after:top-[2px] after:left-[2px]
 after:bg-white after:border-gray-300 after:border   after:rounded-full after:h-5 after:w-5 after:transition-all 
  dark:border-gray-600 peer-checked:bg-green-600"></div>
                        </label>
                    </div>
                    <div class="mt-16 item center">

        <button class="inline-block ml-10 px-16 py-4 bg-cyan-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md" type="button"  @click.prevent="startRecording()" v-bind:disabled="isStartRecording" >Start Recording</button>


         <video  id="myVideo" playsinline class="video-js vjs-default-skin mt-10"></video>
                 
          <div>
            
   
            </div>       
               
               </div>
                </form>
            </div>
            </div>
              <div> 
  </div>

</div>
</template>
<script>
import 'video.js/dist/video-js.min.css';
import videojs from 'video.js';
import RecordRTC from 'recordrtc';
import Record from 'videojs-record/dist/videojs.record.js';


export default {
        name: "Modal",
        props: {
            show: Boolean,
    },
        data() {
            return { 
              
        }
            },
        methods: {
            close_modal() {
                this.$emit("close")
            }
        },
            components:{
 }
    }
</script>

 