<template>
	<div class="flex h-full flex-col bg-zinc-50 dark:bg-black">
		<!-- The underlying div style that the content floats above -->
		<div class="fixed inset-0 flex justify-center sm:px-8">
			<div class="flex w-full max-w-7xl lg:px-8">
				<div
					class="
						w-full
						bg-white
						ring-1 ring-zinc-100
						dark:bg-zinc-900 dark:ring-zinc-300/20
					"
				></div>
			</div>
		</div>
		<div class="relative">
			<Header :nav="nav" />
		</div>
		<!-- Main content -->
		<main>
			<slot></slot>
		</main>
		<footer class="mt-32">
			<div class="sm:px-8">
				<div class="mx-auto max-w-7xl lg:px-8">
					<div
						class="
							border-t border-zinc-100
							pt-10
							pb-16
							dark:border-zinc-700/40
						"
					>
						<div class="relative px-4 sm:px-8 lg:px-12">
							<div class="mx-auto max-w-2xl lg:max-w-5xl">
								<div
									class="
										flex flex-col
										items-center
										justify-between
										gap-6
										sm:flex-row
									"
								>
									<div
										class="
											flex
											gap-6
											text-sm
											font-medium
											text-zinc-800
											dark:text-zinc-200
										"
									>
										<Link
											v-for="(i, index) in nav"
											:key="index"
											:href="i.url"
											class="
												transition
												hover:text-teal-500
												dark:hover:text-teal-400
											"
											>{{ i.title }}</Link
										>
									</div>
									<p
										class="
											text-sm text-zinc-400
											dark:text-zinc-500
										"
									>
										©
										<!-- -->2022<!-- -->
										Jason Law. All rights reserved.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</template>

<script>
import Header from "./Header.vue";
export default {
	data() {
		return {
			nav: [
				{ title: "Home", url: "/" },
				{ title: "Projects", url: "/projects" },
				{ title: "Blog", url: "/blog" },
			],
		};
	},
	components: { Header },
};
</script>

<style>
</style>
