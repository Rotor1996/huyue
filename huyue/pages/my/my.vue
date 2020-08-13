<template>
	<view class="content">
		<button @click="loginAction">登陆/注册</button>
		<view class="tab">
			<view class="tab-info">
				<view>1</view>
				<view>文章</view>
			</view>
			<view class="tab-info">
				<view>2</view>
				<view>被阅</view>
			</view>
			<view class="tab-info">
				<view>3</view>
				<view>粉友</view>
			</view>
			<view class="tab-info">
				
			</view>
		</view>
		<view class="tab-list">
			<view class="list-info">
				<image src="../../static/logo.png"></image>
				<view class="name">收徒弟</view>
			</view>
			<view class="list-info">
				<image src="../../static/logo.png"></image>
				<view class="name">奖励计划</view>
			</view>
			<view class="list-info">
				<image src="../../static/logo.png"></image>
				<view class="name">常见问题</view>
			</view>
			<view class="list-info">
				<image src="../../static/logo.png"></image>
				<view class="name">大侠有意见</view>
			</view>
			<view class="list-info">
				<image src="../../static/logo.png"></image>
				<view class="name">联系我们</view>
			</view>
			<view class="list-info">
				<image src="../../static/logo.png"></image>
				<view class="name">我的师傅</view>
			</view>
		</view>
		
	</view>
</template>

<script>
	export default {
		data() {
			return {
				
			}
		},
		methods: {
			loginAction(){
				uni.navigateTo({
					url:'../login/login'
				})
			}
			
		}
	}
</script>

<style lang="less">
	page{
		background-color: #eeeeee;
	}
	.content{
		.tab{
			display: flex;
			width: 95%;
			margin: 0 auto;
			background-color: #FFFFFF;
			border-radius: 25rpx;
			.tab-info{
				width: 33%;
				text-align: center;
				padding: 10rpx;
			}
			.tab-info:nth-child(4){
				position: absolute;
				width: 30%;
				left: 33vw;
				text-align: center;
				border-left: 1rpx solid #333333;
				border-right: 1rpx solid #333333;
				height: 30rpx;
				margin-top: 1rem;
			}
		}
		.tab-list{
			width: 95%;
			margin: 0 auto;
			background-color: #FFFFFF;
			margin-top: 20rpx;
			.list-info{
				display: flex;
				height: 70rpx;
				line-height: 70rpx;
				align-items:center;
				margin: 10rpx;
				font-size: 30rpx;
				image{
					width: 50rpx;
					height: 50rpx;
					border-radius: 25rpx;
				}
				.name{
					padding-left: 10rpx;
				}
			}
		}
	}
</style>
