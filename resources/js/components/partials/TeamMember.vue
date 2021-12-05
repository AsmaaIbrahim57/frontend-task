<template>
  <div>
    <div class="col">
      <div class="card radius-15">
        <div class="card-body text-center">
          <div class="p-4 border radius-15">
            <img
              :src="member.avatar"
              width="110"
              height="110"
              class="rounded-circle shadow"
              :alt="member.name"
            />
            <h5 class="mb-0 mt-5">{{ member.name }}</h5>
            <p class="mb-3">{{ member.title }}</p>
            <div class="list-inline contacts-social mt-3 mb-3">
              <a
                href="javascript:;"
                class="list-inline-item bg-facebook text-white border-0"
                ><i class="bx bxl-facebook"></i
              ></a>
              <a
                href="javascript:;"
                class="list-inline-item bg-twitter text-white border-0"
                ><i class="bx bxl-twitter"></i
              ></a>
              <a
                href="javascript:;"
                class="list-inline-item bg-linkedin text-white border-0"
                ><i class="bx bxl-linkedin"></i
              ></a>
            </div>
            <div class="d-grid">
              <a href="#" class="btn btn-outline-primary radius-15">Contact Me</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["member"],
};
</script>

<style lang="scss" scoped>
.radius-15 {
  border-radius: 15px;
}
.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 0px solid rgba(0, 0, 0, 0);
  border-radius: 0.25rem;
  margin-bottom: 1.5rem;
  box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}
.contacts-social a {
  font-size: 16px;
  width: 36px;
  height: 36px;
  line-height: 36px;
  background: #ffffff;
  border: 1px solid #eeecec;
  text-align: center;
  border-radius: 50%;
  color: #2b2a2a;
}
.bg-facebook {
  background-color: #3b5998 !important;
}
.bg-twitter {
  background-color: #55acee !important;
}
.bg-linkedin {
  background-color: #0976b4 !important;
}
</style>
