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
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu3"> مرحله سوم</a>
                    </li>
                </ul>
                <div class="tab-content text-right">
                    <div class="tab-pane container active" id="menu1">
                        <div class="form-group col-md-4 left">
                            <label for="">عنوان گروه کالا</label>
                            <input type="text" class="form-control" name="" v-model="nameCat"
                                   placeholder=""><br>
                            <label for="">دسته کالا</label>
                            <select class="form-control" name="parent_id" v-model="selectCat">
                                <option v-for="mcategory in mcategories" :value="mcategory.id">
                                    {{ mcategory.name }}
                                </option>
                            </select><br>
                            <input type="submit" id="btnAddCat" value="ذخیره" class="btn btn-primary"
                                   @click="addCat">
                        </div>
                        <hr>
                        <div class="form-group col-md-4 left">
                            <label for="">عنوان مشحصات</label>
                            <input type="text" class="form-control" name="" v-model="nameGroup">
                        </div>
                        <div class="form-group col-md-4 left">
                            <label for="parent_id">انتخاب کنید </label>
                            <select class="form-control" name="" v-model="selectGroup">
                                <option v-for="mgroup in mgroups" :value="mgroup.id">
                                    {{ mgroup.name }}
                                </option>
                            </select><br>
                            <input type="submit" id="btnAddGroup" value="ذخیره" class="btn btn-primary"
                                   @click="addGroup">
                        </div>
                        <hr>
                        <div class="form-group col-md-4 left">
                            <label for="">مقدار</label>
                            <input type="text" class="form-control" name="" v-model="nameAttribute"><br>
                        </div>
                        <div class="form-group col-md-4 left">
                            <label for="parent_id">انتخاب کنید </label>
                            <select class="form-control" name="" v-model="selectAttribute">
                                <option v-for="mattribute in mattributes" :value="mattribute.id">
                                    {{ mattribute.name }}
                                </option>
                            </select><br>
                            <input type="submit" id="btnAddAttribute" value="ذخیره" class="btn btn-primary"
                                   @click="addAttr">
                        </div>
                        <hr>
                        <div class="form-group col-md-4 left">
                            <label for="">سایز</label>
                            <input type="text" class="form-control" name="" v-model="nameSize">
                        </div>
                        <div class="form-group col-md-4 left">
                            <label for="parent_id">انتخاب کنید </label>
                            <select class="form-control" name="" v-model="selectSize">
                                <option v-for="mgroup in mgroups" :value="mgroup.id">
                                    {{ mgroup.name }}
                                </option>
                            </select><br>
                            <input type="submit" id="btnAddSize" value="ذخیره" class="btn btn-primary"
                                   @click="addSize">
                        </div>

                    </div>
                    <div class="tab-pane container fade" id="menu2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">نام کالا</label>
                                    <input type="text" class="form-control" name="" v-model="productName">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="">توضیحات</label>
                                    <textarea class="form-control" name="" v-model="productDesc" rows="6"></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for=""> قیمت محصول</label>
                                    <input type="text" class="form-control" name="" v-model="productPrice"><br>
                                    <hr>
                                </div>
                                <div class="form-group ">
                                    <label for=""> دسته بندی کالا</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                           placeholder="">
                                </div>
                                <br>
                                <input type="submit" value="ذخیره" class="btn btn-primary" id="btnAddProduct"
                                       @click="addProduct">
                            </div>
                            <div class="col-md-6 ">
                                <div class="row">
                                    <div class="form-group col-md-6 ">
                                        <label for=""> سایز</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6 ">
                                        <label for=""> عنوان خصوصیت</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> مقدار</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> برند/مارک</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""> تخفیف</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                               placeholder="">
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container" id="menu3">
                        <div class="row">
                            <div class="form-group col-md-12 p-lg-5">
                                <slot></slot>
                                <br><br><br><br><br><br><br><br><br><br><br><br><br>
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
    import {myFunc} from "../../myFunc";

    export default {
        name: "ProductCreate",
        data: function () {
            return {
                mcategories: [],
                nameCat: "",
                selectCat: [],
                mgroups: [],
                nameGroup: "",
                selectGroup: [],
                mattributes: [],
                nameAttribute: "",
                selectAttribute: [],
                nameSize: "",
                selectSize: [],
                productName: "",
                productDesc: "",
                productPrice: "",
                // csrf: document.head.querySelector('meta[name="csrf-token"]').content,
            }
        },
        props: [
            'maincategory',
            'maingroup',
            'mainattribute',
        ],
        created() {
            this.mcategories = JSON.parse(this.maincategory);
            this.mgroups = JSON.parse(this.maingroup);
            this.mattributes = JSON.parse(this.mainattribute);
        },
        methods: {
            addCat: function () {
                let btn = document.getElementById("btnAddCat");
                myFunc.saving(btn);
                axios.post('./cat', {
                    id: this.selectCat,
                    name: this.nameCat
                })
                    .then(function () {
                        let message = this.nameCat;
                        myFunc.flash(message);
                    }.bind(this))
                    .catch(function (error) {
                        alert(error);
                    });
            },
            addGroup: function () {
                let btn = document.getElementById("btnAddGroup");
                myFunc.saving(btn);
                axios.post('./group', {
                    id: this.selectGroup,
                    name: this.nameGroup
                })
                    .then(function () {
                        let message = this.nameGroup;
                        myFunc.flash(message);
                    }.bind(this))
                    .catch(function (error) {
                        alert(error);
                    });
            },
            addAttr: function () {
                let btn = document.getElementById("btnAddAttribute");
                myFunc.saving(btn);
                axios.post('./attr', {
                    id: this.selectAttribute,
                    name: this.nameAttribute
                })
                    .then(function () {
                        let message = this.nameAttribute;
                        myFunc.flash(message);
                    }.bind(this))
                    .catch(function (error) {
                        alert(error);
                    });
            },
            addSize: function () {
                let btn = document.getElementById("btnAddSize");
                myFunc.saving(btn);
                axios.post('./size', {
                    id: this.selectSize,
                    name: this.nameSize
                })
                    .then(function () {
                        let message = this.nameSize;
                        myFunc.flash(message);
                    }.bind(this))
                    .catch(function (error) {
                        alert(error);
                    });
            },
            addProduct: function () {
                let btn = document.getElementById("btnAddProduct");
                myFunc.saving(btn);
                axios.post('./product', {
                    name: this.productName,
                    desc: this.productDesc,
                    price: this.productPrice,
                }).then(function () {
                    let message = this.productName;
                    myFunc.flash(message);
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

    .dropzone {
        width: 100%;
        height: 100%;
        min-height: 0px !important;
    }

    #drop {
        margin-top: 30px;
    }


</style>