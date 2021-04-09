<template>
  <div class="Type_Text">
    <div class="container">
      <p>
        Start <span class="typed-text">{{message}}</span><span :class="{'cursor': true , 'typing': typing}">&nbsp;</span>
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Type_Text',
  data(){
    return{
      textArray: ["Editing","Exploring","capturing"],
      typingDelay : 200,
      erasingDelay : 100,
      newTextDelay : 2000,
      textArrayIndex : 0,
      charIndex : 0,
      typing : true,
      message: ''
    };
  },
  methods:{
    type: function(){
      if(this.charIndex < this.textArray[this.textArrayIndex].length){
        if(!this.typing) {
            this.typing = true;
        }
        this.message += this.textArray[this.textArrayIndex].charAt(this.charIndex);
        this.charIndex++ ;
        setTimeout(this.type , this.typingDelay);
    }
    else{
        this.typing = false;
        setTimeout(this.erase, this.newTextDelay);
    }
    },
    erase: function(){
      if(this.charIndex > 0){
        if(!this.typing) {
            this.typing = true;
        }
        this.message = this.textArray[this.textArrayIndex].substring(0, this.charIndex-1);
        this.charIndex-- ;
        setTimeout(this.erase, this.erasingDelay);
    }
    else{
        this.typing = false;
        this.textArrayIndex++;
        if(this.textArrayIndex >= this.textArray.length){
            this.textArrayIndex=0;
        }
        setTimeout(this.type, this.newTextDelay);
    }
    }
  },
  mounted(){
    if(this.textArray.length){
        setTimeout(this.type, this.newTextDelay);
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.container {
  /* height: 5rem; */
  display: flex;
  align-items: center;
  justify-content: center;
}

.container p {
  color: white;
  font-size: 3rem;
  font-weight: bold;
  letter-spacing: 0.1rem;
  text-align: center;
}

.typed-text {
 background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: normal;
}

.cursor {
  display: inline-block;
  width: 3px;
  height: 3rem;
  background: whitesmoke;
  margin-left: 0.1rem;
  animation: blink 1s ease-in-out infinite;
}

.cursor.typing {
  animation: none;
}

@keyframes blink {
  0% {
    background: whitesmoke;
  }
  49% {
    background: whitesmoke;
  }
  50% {
    background: transparent;
  }
  99% {
    background: transparent;
  }
  100% {
    background: whitesmoke;
  }
}
</style>
