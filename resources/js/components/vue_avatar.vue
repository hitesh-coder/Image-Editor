<template>
  <div class="d-flex flex-column align-items-center">
    <img :src="croppedImage" alt="" v-if="cropped"/>
    <vue-avatar
      :width="400"
      :height="400"
      ref="vueavatar"
      @vue-avatar-editor:image-ready="onImageReady"
      v-if="!cropped"
    >
    </vue-avatar>
    <br />
    <vue-avatar-scale
      ref="vueavatarscale"
      @vue-avatar-editor-scale:change-scale="onChangeScale"
      :width="250"
      :min="1"
      :max="3"
      :step="0.02"
      v-if="!cropped"
    >
    </vue-avatar-scale>
    <br />
    <img src="" id="img-1" />
    <button v-on:click="saveClicked" class="btn btn-success" v-if="!cropped">upload</button>
    <button @click="back" class="mt-2 btn btn-info">back</button>
  </div>
</template>

<script>
import VueAvatar from "./VueAvatar.vue";
import VueAvatarScale from "./VueAvatarScale.vue";

export default {
  name: "vue_avatar",
  components: {
    VueAvatar,
    VueAvatarScale,
  },
  data() {
    return {
      croppedImage: this.user.avatar,
      cropped: false
    };
  },
  props: ["user"],
  methods: {
    onChangeScale(scale) {
      this.$refs.vueavatar.changeScale(scale);
    },
    saveClicked() {
      var img = this.$refs.vueavatar.getImageScaled();
      this.croppedImage = img.toDataURL();
      axios.post('home',{'image':this.croppedImage})
        .then(res => this.$toasted.show('Image Uploaded',{type:'success'}), this.cropped= true)
    },
    onImageReady(scale) {
      this.$refs.vueavatarscale.setScale(scale);
    },
    back(){
        this.cropped = !this.cropped
    }
  },
};
</script>

<style>
</style>