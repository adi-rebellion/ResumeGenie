<template></template>
<script>
export default {
  methods: {
    handleCredentialResponse(data) {
      const { credential } = data;
      console.log({ credential });

      $.get(
        "http://localhost:8000/api/google/signin/verify/token?token=" +
          credential,
        function (data, status) {
          const { picture, email, given_name, family_name } = data;
          $("#signInButton").html(`${given_name} ${family_name}`);
          $("#showHero").hide();
          $("#showPicture").attr("src", picture);
          $("#showName").html(`${given_name} ${family_name}`);
          $("#showEmail").html(email);
          $("#showProfile").show();
        }
      );
    },
  },
  mounted() {
    google.accounts.id.initialize({
      client_id:
        "553250003787-h5bjbqc7bjsfegsut7j5ogh6l2a2uk1m.apps.googleusercontent.com",
      callback: this.handleCredentialResponse,
    });
    google.accounts.id.prompt();
  },
};
</script>