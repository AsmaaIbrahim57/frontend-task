<template>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 layout-spacing" v-if="responseError == '' && loading == false">
        <div class="statbox widget box box-shadow">
          <div class="widget-header">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="pb-0 header">Stories</h4>
              </div>
            </div>
          </div>
          <div class="widget-content widget-content-area" v-if="loading == false">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="content_2" class="tabcontent">
                  <div class="story-container-2">
                    <story :story="user" :isCurrentUser="true"></story>
                    <p class="divider">Recently Added</p>
                    <story
                      v-for="(story, index) in unseenStories"
                      :key="'unseen-' + index"
                      :story="story"
                      :isCurrentUser="false"
                    />
                    <p class="divider">Viewed Stories</p>
                    <story
                      v-for="(story, index) in seenStories"
                      :key="'seen-' + index"
                      :story="story"
                      :isCurrentUser="false"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="widget-footer p-2 text-center bg-light-primary"
            v-if="loading == false"
          >
            <a class="text-primary strong" href="#">View All</a>
          </div>
          <div class="container">
            <p class="loading" v-if="loading == true">Fetching data. Please wait...</p>
          </div>
        </div>
      </div>
      <div
        class="alert alert-danger"
        role="alert"
        v-if="responseError && loading == false"
      >
        {{ responseError }}
      </div>
    </div>
  </div>
</template>

<script>
import Story from "./partials/Story";
export default {
  components: {
    story: Story,
  },
  data() {
    return {
      unseenStories: [],
      seenStories: [],
      user: {},
      loading: true,
      responseError: "",
    };
  },
  created() {
    this.initData();
  },
  methods: {
    initData() {
      axios
        .get("/api/stories")
        .then((res) => {
          this.user = res.data.currentUser;
          this.unseenStories = res.data.stories.filter((story) => story.seen == false);
          this.seenStories = res.data.stories.filter((story) => story.seen == true);
          this.loading = false;
          this.responseError = "";
        })
        .catch((err) => {
          if (err.response.status != 500 && err.response.data) {
            this.responseError = err.response.data.message;
          } else {
            this.responseError =
              "Whoops! Something went wrong. Please check your internet connection and try again later.";
          }
          this.loading = false;
        });
    },
  },
};
</script>

<style lang="scss" scoped>
body {
  background: #eee;
  margin-top: 20px;
}
.widget {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
  border-radius: 6px;
  -webkit-box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%), 0 1px 20px 0 rgb(0 0 0 / 7%),
    0px 1px 11px 0px rgb(0 0 0 / 7%);
  -moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07),
    0px 1px 11px 0px rgba(0, 0, 0, 0.07);
  box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%), 0 1px 20px 0 rgb(0 0 0 / 7%),
    0px 1px 11px 0px rgb(0 0 0 / 7%);
}
.widget.box .widget-header {
  background: #fff;
  padding: 0px 8px 0px;
  border-top-right-radius: 6px;
  border-top-left-radius: 6px;
}
.widget .widget-header {
  border-bottom: 0px solid #f1f2f3;
}
.widget.box .widget-header {
  background: #fff;
  padding: 0px 8px 0px;
  border-top-right-radius: 6px;
  border-top-left-radius: 6px;
}
.widget .widget-header {
  border-bottom: 0px solid #f1f2f3;
}
.widget .widget-header:after {
  clear: both;
}
.widget .widget-header:before,
.widget .widget-header:after {
  display: table;
  content: "";
  line-height: 0;
}
.widget-content-area {
  padding: 20px;
  position: relative;
  background-color: #fff;
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px;
}

.statbox .widget-content:before,
.statbox .widget-content:after {
  display: table;
  content: "";
  line-height: 0;
  clear: both;
}
.statbox .widget-content:before,
.statbox .widget-content:after {
  display: table;
  content: "";
  line-height: 0;
  clear: both;
}

.story-container-2 p.divider {
  margin: 10px 0px 10px 0px;
  font-weight: 600;
  font-size: 12px;
  color: #404040;
}
.widget.box .widget-footer {
  padding: 2rem 2.25rem;
  background-color: #ffffff;
  border-top: 1px solid #ebedf3;
}
.bg-light-primary {
  background-color: #f6f1ff !important;
  border-color: #f6f1ff;
  color: #5526ab;
}

/* Custom */
.loading {
  color: gray;
  padding: 1rem;
}
.header {
  margin-top: 1rem;
  margin-left: 0.2rem;
}
</style>
