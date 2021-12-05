<template>
  <div>
    <div class="single-story">
      <div :class="getStoryClassList">
        <img :src="story.avatar" />
        <img src="imgs/plus.png" class="add-story" v-if="isCurrentUser" />
      </div>
      <div class="story-author">
        <p class="name">{{ story.name }}</p>
        <p class="time">{{ isCurrentUser ? "Tap to add a story" : story.time }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["story", "isCurrentUser"],
  computed: {
    getStoryClassList() {
      if (this.isCurrentUser) {
        return "story-dp";
      } else if (this.story.viewed) {
        return ["story-dp", "seen"];
      } else {
        return ["story-dp", "unseen"];
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.story-container-2 .single-story {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.story-container-2 .story-dp {
  height: 50px;
  width: 50px;
  position: relative;
  border-radius: 50%;
  margin-right: 15px;
  padding: 3px;
}

.story-container-2 .story-dp img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
}

.story-container-2 .story-author p.name {
  margin-bottom: 0px;
  font-weight: 600;
  font-size: 13px;
}
.story-container-2 .story-author p.time {
  margin-bottom: 0px;
  font-weight: 500;
  font-size: 12px;
}
.story-container-2 .story-dp img.add-story {
  position: absolute;
  height: 19px !important;
  width: 19px !important;
  right: -3px;
}
.story-container-2 .story-dp img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
}
</style>
