$(function(){function n(){$(function(){$(".feedbackButtonWrapper").click(function(n){$(".surveyWrapper").addClass("surveyOpen"),n.stopPropagation()})}),$(function(){$(".surveyClose").click(function(){$(".surveyWrapper").removeClass("surveyOpen")})})}console.log("%c Justin Parsons","background: red; color: white; padding: 5px 10px;");var e=Barba.BaseTransition.extend({start:function(){Promise.all([this.newContainerLoading,this.fadeOut()]).then(this.fadeIn.bind(this))},fadeOut:function(){return $(this.oldContainer).animate({opacity:0}).promise()},fadeIn:function(){document.body.scrollTop=0,document.documentElement.scrollTop=0;var e=this,o=$(this.newContainer);$(this.oldContainer).hide(),o.css({visibility:"visible",opacity:0}),o.animate({opacity:1},400,function(){e.done(),n()})}});Barba.Pjax.getTransition=function(){return e},Barba.Pjax.start(),n()}),$(function(){$(".menuTextWrap").click(function(n){$(".menu").addClass("open"),n.stopPropagation()})}),$(function(){$(".closeMenuButton").click(function(){$(".menu").removeClass("open")})}),$(function(){$(".site").click(function(n){$(n.target).hasClass("menu")||$(".menu").removeClass("open")})}),$(function(){$(".linkList").click(function(){$(".menu").removeClass("open")})}),$(function(){$(".feedbackButtonWrapper").click(function(n){$(".surveyWrapper").addClass("surveyOpen"),n.stopPropagation()})}),$(function(){$(".surveyClose").click(function(){$(".surveyWrapper").removeClass("surveyOpen")})});