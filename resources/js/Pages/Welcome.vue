<script>
import Card from "./Blog/SmallCard.vue";
import BaseLayout from "@/Layouts/BaseLayout.vue";
export default {
	data() {
		return {
			lander_images: [
				{
					alt: "",
					reverse: true,
					src: "https://res.cloudinary.com/garaji-media/image/upload/c_scale,w_300/v1665287690/SteamDiesel.dev/227387315_1962625367235454_6778663379132391227_n_bjxtv9.jpg",
				},
				{
					alt: "",
					reverse: false,
					src: "https://res.cloudinary.com/garaji-media/image/upload/c_scale,w_300/v1665287624/SteamDiesel.dev/101936688_171467694335239_4061711103152375823_n_frch4l.jpg",
				},
				{
					alt: "",
					reverse: true,
					src: "https://res.cloudinary.com/garaji-media/image/upload/c_scale,w_300/v1665287512/SteamDiesel.dev/20221009_133841_1_d7yaxy.jpg",
				},
				{
					alt: "",
					reverse: false,
					src: "https://res.cloudinary.com/garaji-media/image/upload/c_scale,w_300/v1665287746/SteamDiesel.dev/57437751_368287747143520_2781782994503600796_n_dpbde5.jpg",
				},
				{
					alt: "",
					reverse: false,
					src: "https://res.cloudinary.com/garaji-media/image/upload/c_scale,w_500/v1665287529/SteamDiesel.dev/the_car_hdr_a0whtn.jpg",
				},
			],
			work: [
				{
					company: "SteamDiesel.dev",
					role: "Full Stack Developer",
					img: "/images/splat.png",
					from_date: "2020",
					to_date: "Present",
				},
				{
					company: "OurProperty",
					role: "Full Stack Developer",
					img: "/images/ourProperty.png",
					from_date: "2022",
					to_date: "2022",
				},
				{
					company: "BDFI",
					role: "Founder & Developer",
					img: "/images/bdfi.png",
					from_date: "2017",
					to_date: "2020",
				},

				{
					company: "Moneyspace",
					role: "Finance Broker & Web Developer",
					img: "/images/moneyspace.jfif",
					from_date: "2016",
					to_date: "2017",
				},
			],
			projects: [{ title: "", description: "", img: "" }],
			meta_title: "Web developer in Brisbane for hire or consult",
			meta_description:
				"Full-stack web developer based in Brisbane. I work with Laravel PHP and VueJS to make powerful applications & responsive websites that are SEO optimized & blazing fast.",
		};
	},
	components: { Card, BaseLayout },
};
</script>

<template>
	<Head>
		<title>{{ title }}</title>
		<meta property="og:title" :content="meta_title" />
		<meta name="twitter:title" :content="meta_title" />

		<meta name="description" :content="meta_description" />
		<meta property="og:description" :content="meta_description" />
		<meta name="twitter:description" :content="meta_description" />

		<meta property="og:image" content="/images/splat.png" />
	</Head>
	<BaseLayout>
		<div class="sm:px-8 mt-9">
			<div class="mx-auto max-w-7xl lg:px-8">
				<div class="relative px-4 sm:px-8 lg:px-12">
					<div class="mx-auto flex max-w-2xl lg:max-w-5xl">
						<div class="max-w-2xl">
							<div class="flex relative">
								<h1
									class="
										text-4xl
										font-bold
										tracking-tight
										text-zinc-800
										dark:text-zinc-100
										sm:text-5xl
										z-10
									"
								>
									Full-stack web developer based in Brisbane.
								</h1>
								<div class="z-0 h-full absolute right-2">
									<img
										src="/images/splat.png"
										alt=""
										class="h-full"
									/>
								</div>
							</div>

							<p
								class="
									mt-6
									text-base text-zinc-600
									dark:text-zinc-400
								"
							>
								I’m Jason, a software designer, founder, and
								amateur mechanic. I'm available for hire to
								build or consult on your next web project. I’m
								also the founder and CEO of
								<a
									class="font-semibold text-slate-500"
									href="https://garaji.me"
									target="_blank"
									>Garaji.me</a
								>, an early stage social platform for car
								enthusiasts.
							</p>
							<p
								class="
									mt-4
									text-base text-zinc-600
									dark:text-zinc-400
								"
							>
								I work with the
								<a
									class="font-semibold text-red-500"
									href="https://laravel.com"
									target="_blank"
									>Laravel PHP framework</a
								>
								to build robust and powerful web applications. I
								also work with the
								<a
									class="accent font-semibold"
									href="https://vuejs.org"
									target="_blank"
									>Vue Javascript framework</a
								>
								to build rich and responsive websites and apps
								that are blazing fast.
							</p>
							<div class="mt-6 flex gap-6">
								<a
									class="group -m-1 p-1"
									aria-label="Follow on Twitter"
									href="https://twitter.com/garaji_me"
									target="_blank"
									><svg
										viewBox="0 0 24 24"
										aria-hidden="true"
										class="
											h-6
											w-6
											fill-zinc-500
											transition
											group-hover:fill-zinc-600
											dark:fill-zinc-400
											dark:group-hover:fill-zinc-300
										"
									>
										<path
											d="M20.055 7.983c.011.174.011.347.011.523 0 5.338-3.92 11.494-11.09 11.494v-.003A10.755 10.755 0 0 1 3 18.186c.308.038.618.057.928.058a7.655 7.655 0 0 0 4.841-1.733c-1.668-.032-3.13-1.16-3.642-2.805a3.753 3.753 0 0 0 1.76-.07C5.07 13.256 3.76 11.6 3.76 9.676v-.05a3.77 3.77 0 0 0 1.77.505C3.816 8.945 3.288 6.583 4.322 4.737c1.98 2.524 4.9 4.058 8.034 4.22a4.137 4.137 0 0 1 1.128-3.86A3.807 3.807 0 0 1 19 5.274a7.657 7.657 0 0 0 2.475-.98c-.29.934-.9 1.729-1.713 2.233A7.54 7.54 0 0 0 22 5.89a8.084 8.084 0 0 1-1.945 2.093Z"
										></path></svg></a
								><a
									class="group -m-1 p-1"
									aria-label="Follow on Instagram"
									href="https://instagram.com/garaji.me"
									target="_blank"
									><svg
										viewBox="0 0 24 24"
										aria-hidden="true"
										class="
											h-6
											w-6
											fill-zinc-500
											transition
											group-hover:fill-zinc-600
											dark:fill-zinc-400
											dark:group-hover:fill-zinc-300
										"
									>
										<path
											d="M12 3c-2.444 0-2.75.01-3.71.054-.959.044-1.613.196-2.185.418A4.412 4.412 0 0 0 4.51 4.511c-.5.5-.809 1.002-1.039 1.594-.222.572-.374 1.226-.418 2.184C3.01 9.25 3 9.556 3 12s.01 2.75.054 3.71c.044.959.196 1.613.418 2.185.23.592.538 1.094 1.039 1.595.5.5 1.002.808 1.594 1.038.572.222 1.226.374 2.184.418C9.25 20.99 9.556 21 12 21s2.75-.01 3.71-.054c.959-.044 1.613-.196 2.185-.419a4.412 4.412 0 0 0 1.595-1.038c.5-.5.808-1.002 1.038-1.594.222-.572.374-1.226.418-2.184.044-.96.054-1.267.054-3.711s-.01-2.75-.054-3.71c-.044-.959-.196-1.613-.419-2.185A4.412 4.412 0 0 0 19.49 4.51c-.5-.5-1.002-.809-1.594-1.039-.572-.222-1.226-.374-2.184-.418C14.75 3.01 14.444 3 12 3Zm0 1.622c2.403 0 2.688.009 3.637.052.877.04 1.354.187 1.67.31.421.163.72.358 1.036.673.315.315.51.615.673 1.035.123.317.27.794.31 1.671.043.95.052 1.234.052 3.637s-.009 2.688-.052 3.637c-.04.877-.187 1.354-.31 1.67-.163.421-.358.72-.673 1.036a2.79 2.79 0 0 1-1.035.673c-.317.123-.794.27-1.671.31-.95.043-1.234.052-3.637.052s-2.688-.009-3.637-.052c-.877-.04-1.354-.187-1.67-.31a2.789 2.789 0 0 1-1.036-.673 2.79 2.79 0 0 1-.673-1.035c-.123-.317-.27-.794-.31-1.671-.043-.95-.052-1.234-.052-3.637s.009-2.688.052-3.637c.04-.877.187-1.354.31-1.67.163-.421.358-.72.673-1.036.315-.315.615-.51 1.035-.673.317-.123.794-.27 1.671-.31.95-.043 1.234-.052 3.637-.052Z"
										></path>
										<path
											d="M12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm0-7.622a4.622 4.622 0 1 0 0 9.244 4.622 4.622 0 0 0 0-9.244Zm5.884-.182a1.08 1.08 0 1 1-2.16 0 1.08 1.08 0 0 1 2.16 0Z"
										></path></svg></a
								><a
									class="group -m-1 p-1"
									aria-label="Follow on GitHub"
									href="https://github.com/SteamDiesel"
									target="_blank"
									><svg
										viewBox="0 0 24 24"
										aria-hidden="true"
										class="
											h-6
											w-6
											fill-zinc-500
											transition
											group-hover:fill-zinc-600
											dark:fill-zinc-400
											dark:group-hover:fill-zinc-300
										"
									>
										<path
											fill-rule="evenodd"
											clip-rule="evenodd"
											d="M12 2C6.475 2 2 6.588 2 12.253c0 4.537 2.862 8.369 6.838 9.727.5.09.687-.218.687-.487 0-.243-.013-1.05-.013-1.91C7 20.059 6.35 18.957 6.15 18.38c-.113-.295-.6-1.205-1.025-1.448-.35-.192-.85-.667-.013-.68.788-.012 1.35.744 1.538 1.051.9 1.551 2.338 1.116 2.912.846.088-.666.35-1.115.638-1.371-2.225-.256-4.55-1.14-4.55-5.062 0-1.115.387-2.038 1.025-2.756-.1-.256-.45-1.307.1-2.717 0 0 .837-.269 2.75 1.051.8-.23 1.65-.346 2.5-.346.85 0 1.7.115 2.5.346 1.912-1.333 2.75-1.05 2.75-1.05.55 1.409.2 2.46.1 2.716.637.718 1.025 1.628 1.025 2.756 0 3.934-2.337 4.806-4.562 5.062.362.32.675.936.675 1.897 0 1.371-.013 2.473-.013 2.82 0 .268.188.589.688.486a10.039 10.039 0 0 0 4.932-3.74A10.447 10.447 0 0 0 22 12.253C22 6.588 17.525 2 12 2Z"
										></path></svg></a
								><a
									class="group -m-1 p-1"
									aria-label="Follow on LinkedIn"
									href="https://linkedin.com/in/jason-lloyd-law"
									target="_blank"
									><svg
										viewBox="0 0 24 24"
										class="
											h-6
											w-6
											fill-zinc-500
											transition
											group-hover:fill-zinc-600
											dark:fill-zinc-400
											dark:group-hover:fill-zinc-300
										"
									>
										<path
											d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 01-1.548-1.549 1.548 1.548 0 111.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z"
										></path></svg
								></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-16 sm:mt-20">
			<div
				class="
					-my-4
					flex
					justify-center
					gap-5
					overflow-hidden
					py-4
					sm:gap-8
				"
			>
				<div
					v-for="(i, index) in lander_images"
					:key="index"
					:class="[
						i.reverse ? '-rotate-2' : 'rotate-2',
						'relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl',
					]"
				>
					<img
						:alt="i.alt"
						:src="i.src"
						class="absolute inset-0 h-full w-full object-cover"
						loading="lazy"
						width="299"
						height="330"
					/>
				</div>
			</div>
		</div>
		<div class="sm:px-8 mt-24 md:mt-28">
			<div class="mx-auto max-w-7xl lg:px-8">
				<div class="relative px-4 sm:px-8 lg:px-12">
					<div class="mx-auto max-w-2xl lg:max-w-5xl">
						<div
							class="
								mx-auto
								grid
								max-w-xl
								grid-cols-1
								gap-y-20
								lg:max-w-none lg:grid-cols-2
							"
						>
							<div class="flex flex-col gap-16">
								<Card
									v-for="(p, index) in $attrs.posts"
									:key="index"
									:post="p"
								/>
							</div>
							<div class="space-y-10 lg:pl-16 xl:pl-24">
								<div
									class="
										rounded-2xl
										border border-zinc-100
										p-6
										dark:border-zinc-700/40
									"
								>
									<h2
										class="
											flex
											text-sm
											font-semibold
											text-zinc-900
											dark:text-zinc-100
										"
									>
										<svg
											viewBox="0 0 24 24"
											fill="none"
											stroke-width="1.5"
											stroke-linecap="round"
											stroke-linejoin="round"
											aria-hidden="true"
											class="h-6 w-6 flex-none"
										>
											<path
												d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
												class="
													fill-zinc-100
													stroke-zinc-400
													dark:fill-zinc-100/10
													dark:stroke-zinc-500
												"
											></path>
											<path
												d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6"
												class="
													stroke-zinc-400
													dark:stroke-zinc-500
												"
											></path></svg
										><span class="ml-3"
											>Get in contact</span
										>
									</h2>
									<p
										class="
											mt-2
											text-sm text-zinc-600
											dark:text-zinc-400
										"
									>
										Call on
										<a
											class="
												font-semibold
												text-orange-600
											"
											href="tel:0400696332"
											>0400 696 332</a
										>.
									</p>

									<p
										class="
											mt-2
											text-sm text-zinc-600
											dark:text-zinc-400
										"
									>
										Or send an email to
										<a
											class="
												font-semibold
												text-orange-600
											"
											href="mailto:jason.lloyd.law@gmail.com"
											>jason.lloyd.law@gmail.com</a
										>.
									</p>
								</div>
								<div
									class="
										rounded-2xl
										border border-zinc-100
										p-6
										dark:border-zinc-700/40
									"
								>
									<h2
										class="
											flex
											text-sm
											font-semibold
											text-zinc-900
											dark:text-zinc-100
										"
									>
										<svg
											viewBox="0 0 24 24"
											fill="none"
											stroke-width="1.5"
											stroke-linecap="round"
											stroke-linejoin="round"
											aria-hidden="true"
											class="h-6 w-6 flex-none"
										>
											<path
												d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
												class="
													fill-zinc-100
													stroke-zinc-400
													dark:fill-zinc-100/10
													dark:stroke-zinc-500
												"
											></path>
											<path
												d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5"
												class="
													stroke-zinc-400
													dark:stroke-zinc-500
												"
											></path></svg
										><span class="ml-3">Work</span>
									</h2>
									<ol class="mt-6 space-y-4">
										<li
											v-for="(w, index) in work"
											:key="index"
											class="flex gap-4"
										>
											<div
												class="
													relative
													mt-1
													flex
													h-10
													w-10
													flex-none
													items-center
													justify-center
													rounded-full
													shadow-md shadow-zinc-800/5
													ring-1 ring-zinc-900/5
													dark:border
													dark:border-zinc-700/50
													dark:bg-zinc-800
													dark:ring-0
												"
											>
												<img
													alt=""
													:src="w.img"
													width="32"
													height="32"
													decoding="async"
													data-nimg="future"
													class="h-7 w-7"
													loading="lazy"
												/>
											</div>
											<dl
												class="
													flex flex-auto flex-wrap
													gap-x-2
												"
											>
												<dt class="sr-only">Company</dt>
												<dd
													class="
														w-full
														flex-none
														text-sm
														font-medium
														text-zinc-900
														dark:text-zinc-100
													"
												>
													{{ w.company }}
												</dd>
												<dt class="sr-only">Role</dt>
												<dd
													class="
														text-xs text-zinc-500
														dark:text-zinc-400
													"
												>
													{{ w.role }}
												</dd>
												<dt class="sr-only">Date</dt>
												<dd
													class="
														ml-auto
														text-xs text-zinc-400
														dark:text-zinc-500
													"
													aria-label="2019 until Present"
												>
													<time datetime="2019">{{
														w.from_date
													}}</time>
													<span aria-hidden="true"
														>—</span
													>
													<time datetime="2022">{{
														w.to_date
													}}</time>
												</dd>
											</dl>
										</li>
									</ol>
									<a
										class="
											inline-flex
											items-center
											gap-2
											justify-center
											rounded-md
											py-2
											px-3
											text-sm
											outline-offset-2
											transition
											active:transition-none
											bg-zinc-50
											font-medium
											text-zinc-900
											hover:bg-zinc-100
											active:bg-zinc-100
											active:text-zinc-900/60
											dark:bg-zinc-800/50
											dark:text-zinc-300
											dark:hover:bg-zinc-800
											dark:hover:text-zinc-50
											dark:active:bg-zinc-800/50
											dark:active:text-zinc-50/70
											group
											mt-6
											w-full
										"
										href="https://jasonlaw.netlify.app/"
										>Download CV<svg
											viewBox="0 0 16 16"
											fill="none"
											aria-hidden="true"
											class="
												h-4
												w-4
												stroke-zinc-400
												transition
												group-active:stroke-zinc-600
												dark:group-hover:stroke-zinc-50
												dark:group-active:stroke-zinc-50
											"
										>
											<path
												d="M4.75 8.75 8 12.25m0 0 3.25-3.5M8 12.25v-8.5"
												stroke-width="1.5"
												stroke-linecap="round"
												stroke-linejoin="round"
											></path></svg
									></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</BaseLayout>
</template>
<style scoped>
.accent {
	background: -webkit-linear-gradient(315deg, #42d392 25%, #647eff);
	background-clip: text;
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}
</style>
