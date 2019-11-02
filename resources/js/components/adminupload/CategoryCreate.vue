<template>
    <div class="dir">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3> ایجاد دسته</h3>
                </div>
                <div class="card-body text-right">
                    <div class="col-4">
                        <div class="form-group">
                            <label for=""> دسته مادر </label>
                            <input type="text" class="form-control" name="title" id="" aria-describedby="helpId"
                                   placeholder="نام دسته مادر را وارد نمایید" v-model="title"> <br>
                            <input type="submit" value="ایجاد دسته مادر" class="btn btn-info" @click="mCat">
                        </div>
                    </div>
                    <hr>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">زیر دسته </label>
                            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
                                   placeholder="نام زبر دسته را وارد نمایید">
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="parent_id">انتخاب دسته </label>
                        <select class="form-control" name="parent_id" id="">
                            <option value="1">دسته مادر</option>
                        </select><br>
                        <input type="submit" value="ایجاد دسته " class="btn btn-primary">
                    </div>


                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "CategoryCreate",
        data() {
            return {
                title: "",
            }
        },
        methods: {
            mCat() {
                axios.post('./category', {
                    title: this.title,
                })
                    .then(function () {
                        alert(` ${this.title}
                                                با موفقیت بارگذاری شد` );
                    }.bind(this))
                    .catch(function (error) {
                        alert(error);
                    });
            }
        }
    }
</script>

<style scoped>
    .dir {
        direction: rtl !important;
        margin-top: 7%;
    }


</style>