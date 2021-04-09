<template>
  <div class="index" v-on:mousemove="ch_bg">
    <div class="content">
      <div class="color_image" v-bind:style="{ width: xpos + 'px' }">
        <img :src="require('./assets/bg.jpg').default" class="image" />
      </div>
      <div class="intro">
        <app-Type_Text></app-Type_Text>
        <a href="/login" class="editor_page">Get started</a>
      </div>
    </div>
  </div>
</template>

<script>
import Type_Text from "./Type_Text"

export default {
  name: "index",
  components: {
    'app-Type_Text': Type_Text
  },
  data() {
    return {
      xpos: "",
    };
  },
  methods: {
    ch_bg: function (e) {
      let X = e.pageX;
      this.xpos = X;
    },
  },
};
</script>

<style scoped>
*{
  margin: 0%;
  padding: 0%;
  box-sizing: border-box;
}

.index {
  height: 100vh;
  width: 100%;
  position: absolute;
  top: 0%;
  left: 0%;
}

.index::before {
  content: "";
  background: url("./assets/bg.jpg") center center/cover;
  filter: grayscale(100%);
  position: absolute;
  top: 0%;
  left: 0%;
  height: 100vh;
  width: 100%;
  z-index: -1;
}

.color_image {
  position: absolute;
  top: 0;
  left: 0%;
  height: 100vh;
  width: 50%;
  z-index: 0;
  overflow: hidden;
}

.image {
  position: absolute;
  top: 0;
  height: 100vh;
  width: 100vw;
  object-fit: cover;
  z-index: -2;
}

.intro {
  position: absolute;
  right: 4em;
  top: 4em;
  width: 16em;
  height: 24rem;
  padding: 1rem 2rem;
  font-size: 2rem;
  background: linear-gradient(to left, #fa7070ce 0%, #fee140c7 100%);
  border-radius: 0.25rem;
  box-shadow: 0px 0px 2px rgb(182, 182, 182);
  z-index: 1;
}

@supports (
  (-webkit-backdrop-filter: blur(2px)) or (backdrop-filter: blur(2px))
) {
  .intro {
    background: linear-gradient(to right, #fee14078 0%, #fa707070 100%);
    backdrop-filter: blur(1px);
  }
}

.editor_page {
  text-decoration: none;
  padding: 1rem;
  background: rgba(231, 241, 91, 0.3);
  backdrop-filter: blur(3px);
  position: absolute; 
  bottom: 4rem;
  left: 50%;
  transform: translate(-50%,0%);
  color: white;
  border-radius: 0.25rem;
  font-weight: bold;
}

.editor_page:active{
  background: rgba(241, 231, 91, 0.651);
}
</style>
