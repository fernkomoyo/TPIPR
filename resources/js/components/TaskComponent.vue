
<script src="jquery-3.6.0.min.js"></script>

<template>
    <div>
        <button @click="createModal" class="btn btn-primary btn-block">Add New Post</button>

        <table class="table" v-if="tasks">
            
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Body</th>
                </tr>
                <tbody>
                    <tr v-for="(task, index) in tasks">
                        <td>{{index + 1}}</td>
                        <td>{{task.name}}</td>
                        <td>{{task.body}}</td>
                        <td><button class="btn btn-info">Edit</button></td>
                        <td><button class="btn btn-danger">Delete</button></td>
                    </tr>
                </tbody>
            
        
        </table>
        
        <!-- Modal -->
        <div class="modal fade" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1>TESTING MODAL</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

        


    </div>
    
    

    
</template>

<script>
    export default {

        data(){

            return{
                task:{
                    name: '',
                    body: ''
                },

                tasks: [],

                uri: 'http://laravelwindows.test/tasks'
            }
        },

        methods: {

            createModal(){
               $("#create-modal").modal("show");
              
            },

            loadTasks(){

                axios.get(this.uri).then(response=>{

                    this.tasks = response.data.tasks
                    
                });
            }
        },

        mounted() {
            this.loadTasks();
        }
    }
</script>