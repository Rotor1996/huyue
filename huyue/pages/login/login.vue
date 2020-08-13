<template>
	<view class="content">
		<view class="login">
			<view class="user-name">
				<input placeholder="请输入账号" />
			</view>
			<view class="pass-word">
				<input placeholder="请输入密码" />
			</view>
			<button>确认登陆</button>
		</view>
		<view class="register" @click="register">注册</view>
		<view class="normal-link">忘记密码?</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				
			}
		},
		methods: {
			register(){
				uni.navigateTo({
					url:'./register/register'
				})
			}
		}
	}
</script>

<style>

</style>
