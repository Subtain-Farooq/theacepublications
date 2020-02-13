<template>
    <div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3 flex justify-start">
                <label class="text-lg text-blue-800">Select Journal Subject</label>
            </div>
            <div class="md:w-2/3 w-full overflow-hidden">
                <div class="relative">
                    <select  name="category"  v-model='category' @change='getJournals()' class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none  focus:border-blue-700 ">
                        <option value="">Select Journal Subject</option>
                        <option  v-for='data in categories' :value='data.id'>{{ data.name }}</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                    <div v-pre>
                        @error('category')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3 flex justify-start">
                <label class="text-lg text-blue-800">Select Journal</label>
            </div>
            <div class="md:w-2/3 w-full overflow-hidden">
                <div class="relative">
                    <select  name="journal"  v-model='journal' class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none focus:border-blue-700">
                        <option value="">Select Journal</option>
                        <option v-for='data in journals' :value='data.id'>{{ data.name }}</option>

                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                    @error('journal')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "JournalCategory.vue",
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                category: 0,
                categories: [],
                journal: 0,
                journals: []
            }
        },
        methods:{
            getCategories: function(){
                axios.get('/api/getCategories')
                    .then(function (response) {
                        this.categories = response.data;
                    }.bind(this));

            },
            getJournals: function() {
                axios.get('/api/getJournals/' + this.category)
                    .then(function(response){
                    this.journals = response.data;
                }.bind(this));
            }
        },
        created: function(){
            this.getCategories()
        }
    }
</script>
