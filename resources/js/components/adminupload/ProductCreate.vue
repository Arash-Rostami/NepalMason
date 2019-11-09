<template>
    <div class="col-md-12 main" id="drop">
        <div class="card">
            <div class="card-header text-center">
                <h3> ایجاد محصول</h3>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#menu1">مرحله اول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2"> مرحله دوم</a>
                    </li>
                </ul>
                <div class="tab-content text-right">
                    <div class="tab-pane container active" id="menu1">
                        <div class="form-group col-md-4 left">
                            <label for="">عنوان گروه کالا</label>
                            <input type="text" class="form-control" name="" v-model="nameGroup"
                                   placeholder=""><br>
                            <label for="">دسته کالا</label>
                            <select class="form-control" name="parent_id" v-model="selectGroup">
                                <option v-for="mcategory in mcategories" :value="mcategory.id">
                                    {{ mcategory.name }}
                                </option>
                            </select><br>
                            <input type="submit" id="btnAddGroup" value="ذخیره" class="btn btn-primary"
                                   @click="addGroup">

                        </div>
                        <hr>
                        <div class="form-group col-md-4 left">
                            <label for="">عنوان مشحصات</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                   placeholder="">
                        </div>
                        <div class="form-group col-md-4 left">
                            <label for="parent_id">انتخاب کنید </label>
                            <select class="form-control" name="parent_id" v-model="select">
                                <option>
                                </option>
                            </select><br>
                            <input type="submit" value="ذخیره" class="btn btn-primary">
                        </div>
                        <br>
                        <div class="form-group col-md-4 left">
                            <label for="">مقدار</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                   placeholder=""><br>
                            <input type="submit" value="ذخیره" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="menu2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">نام کالا</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                           placeholder="">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="">توضیحات</label>
                                    <textarea class="form-control" name="" id="" rows="6"></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for=""> قیمت محصول</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                           placeholder=""><br>
                                    <hr>
                                    <vue-dropzone ref="myVueDropzone" id="dropzone"
                                                  :options="dropzoneOptions"></vue-dropzone>
                                    <br>
                                    <input type="submit" value="ذخیره" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="row">
                                    <div class="form-group col-md-6 ">
                                        <label for=""> سایز</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                    <div class="form-group submitBtn col-md-4">
                                        <br>
                                        <input type="submit" value="ذخیره" class="btn btn-primary">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6 ">
                                        <label for=""> عنوان خصوصیت</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                    <div class="form-group submitBtn col-md-4">
                                        <br>
                                        <input type="submit" value="ذخیره" class="btn btn-primary">
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> مقدار</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                    <div class="form-group submitBtn col-md-4">
                                        <br>
                                        <input type="submit" value="ذخیره" class="btn btn-primary">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> برند/مارک</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                    <div class="form-group submitBtn col-md-4">
                                        <br>
                                        <input type="submit" value="ذخیره" class="btn btn-primary">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> تخفیف</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                    <div class="form-group submitBtn col-md-4">
                                        <br>
                                        <input type="submit" value="ذخیره" class="btn btn-primary">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> دسته بندی کالا</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                    <div class="form-group submitBtn col-md-4">
                                        <br>
                                        <input type="submit" value="ذخیره" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>

    </div>
</template>

<script>
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    import {myFunc} from "../../myFunc";


    export default {
        name: "ProductCreate",
        data: function () {
            return {
                mcategories: [],
                nameGroup: "",
                selectGroup: [],
                dropzoneOptions: {
                    url: 'https://httpbin.org/post',
                    thumbnailWidth: 150,
                    maxFilesize: 0.5,
                    headers: {"My-Awesome-Header": "header value"},
                    dictDefaultMessage: "<i class=\"fas fa-cloud-upload-alt\"></i> آپلود عکس "
                }
            }
        },
        components: {
            vueDropzone: vue2Dropzone
        },
        props: [
            'maincategory',
        ],
        created() {
            this.mcategories = JSON.parse(this.maincategory);
        },
        methods: {
            addGroup: function () {
                let btn = document.getElementById("btnAddGroup");
                new myFunc().saving(btn);
                axios.post('./group', {
                    id: this.selectGroup,
                    name: this.nameGroup
                })
                    .then(function () {
                        let message = this.nameGroup;
                        new myFunc().flash(message);
                    }.bind(this))
                    .catch(function (error) {
                        alert(error);
                    });
            },
        }
    }
</script>

<style scoped>
    .main {
        margin-top: 20px;
        direction: rtl;
    }

    .active {
        background-color: lightblue;
    }

    .tab-content {
        margin-top: 20px;
    }

    .tab-pane {
        padding: 10px;
    }

    .submitBtn {
        margin-top: 5px;
        margin-right: 5px;
        margin-bottom: 5px;
    }


</style>