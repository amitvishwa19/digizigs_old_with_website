import moment from 'moment'
import Vue from 'vue'

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

//Sweet Alert
import Swal from 'sweetalert2';
window.swal = Swal;
const toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000
});

const swalWithBootstrapButtons = Swal.mixin({
  confirmButtonClass: 'btn btn-success',
  cancelButtonClass: 'btn btn-danger',
  buttonsStyling: false,
})

window.toast = toast;
window.swalWithBootstrapButtons = swalWithBootstrapButtons;

const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

//Extra Components
Vue.component('avatar', require('./components/Avatar.vue'));
Vue.component('editor', require('./components/Editor.vue'));

//Mail Box
Vue.component('mailbox', require('./mail/Mailbox.vue'));
Vue.component('mail-compose', require('./mail/MailCompose.vue'));
Vue.component('mail-content', require('./mail/MailContent.vue'));
Vue.component('mailbox-group', require('./mail/MailboxGroup.vue'));
Vue.component('mailbox-sidebar', require('./mail/MailboxSidebar.vue'));



let routes = [
	{ path: '/foo', component: Foo },
    { path: '/bar', component: Bar }
];


const router = new VueRouter({
	mode: 'history',
	routes
})

const app = new Vue({
    el: '#vueapp',
    router,
 
    data(){
       return{
          //fsdfsdfsdfsdfsff
          testmsg:'This is test msg',
          cat:'',
 
          //dasdasdasdadasdasd
       }
    },
    watch:{
 
    },
    methods:{
       catsubmit(){
          alert('Category submited')
       }
    },
 
 
 
 });


 Vue.filter('vueDate',function(created){
    return moment(created).format('DD-MM-YYYY');
  })
  
  Vue.filter('vueAgoTime',function(created){
    if(created){
      return moment(created).calendar();
    }
  })

  Vue.filter('dateTime',function(created){
    if(created){
      return moment(created).format('MMMM Do YYYY, h:mm:ss a');
    }
  })
  
  Vue.filter('vueMoment',function(created){
    return moment(created).fromNow();
  })
  Vue.filter('vueDay',function(created){
    return moment(created).format("MMM Do");    
  })
  
  Vue.filter('mailname',function(from){
    var frm = from.split('<')[0];
    var someStr = frm;
    return someStr.replace(/['"]+/g, '');
  })
  Vue.filter('mailSenderName',function(from){
    var frm = from.split('<')[0];
    return frm;
  })
  Vue.filter('mailSenderEmail',function(from){
    var frm = str.split('<').pop().split('>')[0];
    return from;
  })
  
  Vue.filter('removeuotation',function(subject){
    var someStr = subject;
    return someStr.replace(/['"]+/g, '');
  })