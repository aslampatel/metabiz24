/*!  1.6.61 2022-07-13 16:23 */
!function(a){a(document).ready(function(){["#charitable-registration-form","#charitable-profile-form","#charitable-campaign-submission-form"].forEach(function(t){var i=a(t);i.length&&(i.append('<input type="hidden" id="charitable-submit-button-value" />'),i.find("[type=submit]").on("click",function(t){var a;if(i[0].checkValidity())return a=t.currentTarget.name,t=t.currentTarget.value,i.find("#charitable-submit-button-value").attr("name",a).attr("value",t),i.find("[type=submit]").attr("disabled","disabled"),i.submit()}))})})}(jQuery);