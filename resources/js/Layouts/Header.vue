<template>
	<Popover class="relative">
		<div
			class="pointer-events-none absolute inset-0 z-30"
			aria-hidden="true"
		/>
		<div class="relative z-20">
			<div
				class="
					mx-auto
					flex
					max-w-7xl
					items-center
					justify-between
					px-4
					py-5
					sm:px-6 sm:py-4
					md:justify-start
					sm:space-x-10
					lg:px-8
				"
			>
				<div>
					<a href="/" class="flex">
						<span class="sr-only">Home</span>
						<img
							class="
								rounded-full
								bg-zinc-100
								object-cover
								dark:bg-zinc-800
								h-16
								w-16
							"
							src="https://res.cloudinary.com/garaji-media/image/upload/c_scale,w_200/v1665286344/SteamDiesel.dev/Jason_Law_el6xir.png"
							alt="Jason Law - Full stack web developer"
							width="64"
							height="64"
						/>
					</a>
				</div>
				<div class="-my-2 -mr-2 sm:hidden">
					<PopoverButton
						class="
							inline-flex
							items-center
							justify-center
							rounded-md
							bg-white
							p-2
							text-gray-400
							hover:bg-gray-100 hover:text-gray-500
							focus:outline-none
							focus:ring-2
							focus:ring-inset
							focus:ring-indigo-500
						"
					>
						<span class="sr-only">Open menu</span>
						<Bars3Icon class="h-6 w-6" aria-hidden="true" />
					</PopoverButton>
				</div>
				<!-- medium and up  pop-out menu -->
				<div
					class="
						hidden
						sm:flex sm:flex-1 sm:items-center sm:justify-between
					"
				>
					<PopoverGroup as="nav" class="flex space-x-10">
						<!-- <Popover v-slot="{ open }">
							<PopoverButton
								:class="[
									open ? 'text-gray-900' : 'text-gray-500',
									'group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2',
								]"
							>
								<span>Solutions</span>
								<ChevronDownIcon
									:class="[
										open
											? 'text-gray-600'
											: 'text-gray-400',
										'ml-2 h-5 w-5 group-hover:text-gray-500',
									]"
									aria-hidden="true"
								/>
							</PopoverButton>

							<transition
								enter-active-class="transition ease-out duration-200"
								enter-from-class="opacity-0 -translate-y-1"
								enter-to-class="opacity-100 translate-y-0"
								leave-active-class="transition ease-in duration-150"
								leave-from-class="opacity-100 translate-y-0"
								leave-to-class="opacity-0 -translate-y-1"
							>
								<PopoverPanel
									class="
										absolute
										inset-x-0
										top-full
										z-10
										hidden
										transform
										bg-white
										shadow-lg
										md:block
									"
								>
									<div
										class="
											mx-auto
											grid
											max-w-7xl
											gap-y-6
											px-4
											py-6
											sm:grid-cols-2
											sm:gap-8
											sm:px-6
											sm:py-8
											lg:grid-cols-4 lg:px-8 lg:py-12
											xl:py-16
										"
									>
										<a
											v-for="item in solutions"
											:key="item.name"
											:href="item.href"
											class="
												-m-3
												flex flex-col
												justify-between
												rounded-lg
												p-3
												hover:bg-gray-50
											"
										>
											<div
												class="
													flex
													md:h-full
													lg:flex-col
												"
											>
												<div class="flex-shrink-0">
													<span
														class="
															inline-flex
															h-10
															w-10
															items-center
															justify-center
															rounded-md
															bg-indigo-500
															text-white
															sm:h-12 sm:w-12
														"
													>
														<component
															:is="item.icon"
															class="h-6 w-6"
															aria-hidden="true"
														/>
													</span>
												</div>
												<div
													class="
														ml-4
														md:flex
														md:flex-1
														md:flex-col
														md:justify-between
														lg:ml-0 lg:mt-4
													"
												>
													<div>
														<p
															class="
																text-base
																font-medium
																text-gray-900
															"
														>
															{{ item.name }}
														</p>
														<p
															class="
																mt-1
																text-sm
																text-gray-500
															"
														>
															{{
																item.description
															}}
														</p>
													</div>
													<p
														class="
															mt-2
															text-sm
															font-medium
															text-indigo-600
															lg:mt-4
														"
													>
														Learn more
														<span
															aria-hidden="true"
														>
															&rarr;</span
														>
													</p>
												</div>
											</div>
										</a>
									</div>
									<div class="bg-gray-50">
										<div
											class="
												mx-auto
												max-w-7xl
												space-y-6
												px-4
												py-5
												sm:flex
												sm:space-y-0
												sm:space-x-10
												sm:px-6
												lg:px-8
											"
										>
											<div
												v-for="item in callsToAction"
												:key="item.name"
												class="flow-root"
											>
												<a
													:href="item.href"
													class="
														-m-3
														flex
														items-center
														rounded-md
														p-3
														text-base
														font-medium
														text-gray-900
														hover:bg-gray-100
													"
												>
													<component
														:is="item.icon"
														class="
															h-6
															w-6
															flex-shrink-0
															text-gray-400
														"
														aria-hidden="true"
													/>
													<span class="ml-3">{{
														item.name
													}}</span>
												</a>
											</div>
										</div>
									</div>
								</PopoverPanel>
							</transition>
						</Popover> -->
						<Link
							v-for="(i, index) in nav"
							:key="index"
							:href="i.url"
							class="
								text-base
								font-medium
								text-gray-500
								hover:text-gray-900
							"
							>{{ i.title }}</Link
						>

						<!-- <Popover v-slot="{ open }">
							<PopoverButton
								:class="[
									open ? 'text-gray-900' : 'text-gray-500',
									'group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2',
								]"
							>
								<span>More</span>
								<ChevronDownIcon
									:class="[
										open
											? 'text-gray-600'
											: 'text-gray-400',
										'ml-2 h-5 w-5 group-hover:text-gray-500',
									]"
									aria-hidden="true"
								/>
							</PopoverButton>

							<transition
								enter-active-class="transition ease-out duration-200"
								enter-from-class="opacity-0 -translate-y-1"
								enter-to-class="opacity-100 translate-y-0"
								leave-active-class="transition ease-in duration-150"
								leave-from-class="opacity-100 translate-y-0"
								leave-to-class="opacity-0 -translate-y-1"
							>
								<PopoverPanel
									class="
										absolute
										inset-x-0
										top-full
										z-10
										hidden
										transform
										shadow-lg
										md:block
									"
								>
									<div class="absolute inset-0 flex">
										<div class="w-1/2 bg-white" />
										<div class="w-1/2 bg-gray-50" />
									</div>
									<div
										class="
											relative
											mx-auto
											grid
											max-w-7xl
											grid-cols-1
											lg:grid-cols-2
										"
									>
										<nav
											class="
												grid
												gap-y-10
												bg-white
												px-4
												py-8
												sm:grid-cols-2
												sm:gap-x-8
												sm:py-12
												sm:px-6
												lg:px-8
												xl:pr-12
											"
										>
											<div>
												<h3
													class="
														text-base
														font-medium
														text-gray-500
													"
												>
													Company
												</h3>
												<ul
													role="list"
													class="mt-5 space-y-6"
												>
													<li
														v-for="item in company"
														:key="item.name"
														class="flow-root"
													>
														<a
															:href="item.href"
															class="
																-m-3
																flex
																items-center
																rounded-md
																p-3
																text-base
																font-medium
																text-gray-900
																hover:bg-gray-50
															"
														>
															<component
																:is="item.icon"
																class="
																	h-6
																	w-6
																	flex-shrink-0
																	text-gray-400
																"
																aria-hidden="true"
															/>
															<span
																class="ml-4"
																>{{
																	item.name
																}}</span
															>
														</a>
													</li>
												</ul>
											</div>
											<div>
												<h3
													class="
														text-base
														font-medium
														text-gray-500
													"
												>
													Resources
												</h3>
												<ul
													role="list"
													class="mt-5 space-y-6"
												>
													<li
														v-for="item in resources"
														:key="item.name"
														class="flow-root"
													>
														<a
															:href="item.href"
															class="
																-m-3
																flex
																items-center
																rounded-md
																p-3
																text-base
																font-medium
																text-gray-900
																hover:bg-gray-50
															"
														>
															<component
																:is="item.icon"
																class="
																	h-6
																	w-6
																	flex-shrink-0
																	text-gray-400
																"
																aria-hidden="true"
															/>
															<span
																class="ml-4"
																>{{
																	item.name
																}}</span
															>
														</a>
													</li>
												</ul>
											</div>
										</nav>
										<div
											class="
												bg-gray-50
												px-4
												py-8
												sm:py-12 sm:px-6
												lg:px-8
												xl:pl-12
											"
										>
											<div>
												<h3
													class="
														text-base
														font-medium
														text-gray-500
													"
												>
													From the blog
												</h3>
												<ul
													role="list"
													class="mt-6 space-y-6"
												>
													<li
														v-for="post in blogPosts"
														:key="post.id"
														class="flow-root"
													>
														<a
															:href="post.href"
															class="
																-m-3
																flex
																rounded-lg
																p-3
																hover:bg-gray-100
															"
														>
															<div
																class="
																	hidden
																	flex-shrink-0
																	sm:block
																"
															>
																<img
																	class="
																		h-20
																		w-32
																		rounded-md
																		object-cover
																	"
																	:src="
																		post.imageUrl
																	"
																	alt=""
																/>
															</div>
															<div
																class="
																	w-0
																	flex-1
																	sm:ml-8
																"
															>
																<h4
																	class="
																		truncate
																		text-base
																		font-medium
																		text-gray-900
																	"
																>
																	{{
																		post.name
																	}}
																</h4>
																<p
																	class="
																		mt-1
																		text-sm
																		text-gray-500
																	"
																>
																	{{
																		post.preview
																	}}
																</p>
															</div>
														</a>
													</li>
												</ul>
											</div>
											<div
												class="mt-6 text-sm font-medium"
											>
												<a
													href="#"
													class="
														text-indigo-600
														hover:text-indigo-500
													"
												>
													View all posts
													<span aria-hidden="true">
														&rarr;</span
													>
												</a>
											</div>
										</div>
									</div>
								</PopoverPanel>
							</transition>
						</Popover> -->
					</PopoverGroup>
					<div class="flex items-center md:ml-12">
						<!-- <a
							href="#"
							class="
								text-base
								font-medium
								text-gray-500
								hover:text-gray-900
							"
							>Sign in</a
						>
						<a
							href="#"
							class="
								ml-8
								inline-flex
								items-center
								justify-center
								rounded-md
								border border-transparent
								bg-indigo-600
								px-4
								py-2
								text-base
								font-medium
								text-white
								shadow-sm
								hover:bg-indigo-700
							"
							>Sign up</a
						> -->
					</div>
				</div>
			</div>
		</div>

		<transition
			enter-active-class="duration-200 ease-out"
			enter-from-class="opacity-0 scale-95"
			enter-to-class="opacity-100 scale-100"
			leave-active-class="duration-100 ease-in"
			leave-from-class="opacity-100 scale-100"
			leave-to-class="opacity-0 scale-95"
		>
			<PopoverPanel
				focus
				class="
					absolute
					inset-x-0
					top-0
					z-30
					origin-top-right
					transform
					p-2
					transition
					md:hidden
				"
			>
				<div
					class="
						divide-y-2 divide-gray-50
						rounded-lg
						bg-white
						shadow-lg
						ring-1 ring-black ring-opacity-5
					"
				>
					<div class="px-5 pt-5 sm:pb-8">
						<div class="flex items-center justify-between">
							<div></div>
							<div class="-mr-2">
								<PopoverButton
									class="
										inline-flex
										items-center
										justify-center
										rounded-md
										bg-white
										p-2
										text-gray-400
										hover:bg-gray-100 hover:text-gray-500
										focus:outline-none
										focus:ring-2
										focus:ring-inset
										focus:ring-indigo-500
									"
								>
									<span class="sr-only">Close menu</span>
									<XMarkIcon
										class="h-6 w-6"
										aria-hidden="true"
									/>
								</PopoverButton>
							</div>
						</div>
						<div class="mt-6 sm:mt-8">
							<!-- <nav>
								<div
									class="
										grid
										gap-7
										sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4
									"
								>
									<Link
										v-for="item in solutions"
										:key="item.name"
										:href="item.href"
										class="
											-m-3
											flex
											items-center
											rounded-lg
											p-3
											hover:bg-gray-50
										"
									>
										<div
											class="
												flex
												h-10
												w-10
												flex-shrink-0
												items-center
												justify-center
												rounded-md
												bg-indigo-500
												text-white
												sm:h-12 sm:w-12
											"
										>
											<component
												:is="item.icon"
												class="h-6 w-6"
												aria-hidden="true"
											/>
										</div>
										<div
											class="
												ml-4
												text-base
												font-medium
												text-gray-900
											"
										>
											{{ item.name }}
										</div>
									</Link>
								</div>
								<div class="mt-8 text-base">
									<a
										href="#"
										class="
											font-medium
											text-indigo-600
											hover:text-indigo-500
										"
									>
										View all products
										<span aria-hidden="true"> &rarr;</span>
									</a>
								</div>
							</nav> -->
						</div>
					</div>
					<div class="py-6 px-5">
						<div class="grid grid-cols-2 gap-4">
							<Link
								v-for="(i, index) in nav"
								:key="index"
								:href="i.url"
								class="
									rounded-md
									text-base
									font-medium
									text-gray-900
									hover:text-gray-700
								"
								>{{ i.title }}</Link
							>
						</div>
						<div class="">
							<!-- <a
								href="#"
								class="
									flex
									w-full
									items-center
									justify-center
									rounded-md
									border border-transparent
									bg-indigo-600
									px-4
									py-2
									text-base
									font-medium
									text-white
									shadow-sm
									hover:bg-indigo-700
								"
								>Sign up</a
							>
							<p
								class="
									mt-6
									text-center text-base
									font-medium
									text-gray-500
								"
							>
								Existing customer?
								{{ " " }}
								<a
									href="#"
									class="
										text-indigo-600
										hover:text-indigo-500
									"
									>Sign in</a
								>
							</p> -->
						</div>
					</div>
				</div>
			</PopoverPanel>
		</transition>
	</Popover>
</template>

<script>
import {
	Popover,
	PopoverButton,
	PopoverGroup,
	PopoverPanel,
} from "@headlessui/vue";
import {
	Bars3Icon,
	BookmarkSquareIcon,
	BriefcaseIcon,
	BuildingOfficeIcon,
	ChartBarIcon,
	CheckCircleIcon,
	ComputerDesktopIcon,
	CursorArrowRaysIcon,
	GlobeAltIcon,
	InformationCircleIcon,
	NewspaperIcon,
	PhoneIcon,
	PlayIcon,
	ShieldCheckIcon,
	Squares2X2Icon,
	UserGroupIcon,
	XMarkIcon,
} from "@heroicons/vue/24/outline";
import { ChevronDownIcon } from "@heroicons/vue/20/solid";
export default {
	components: {
		Popover,
		PopoverButton,
		PopoverGroup,
		PopoverPanel,
		Bars3Icon,
		BookmarkSquareIcon,
		BriefcaseIcon,
		BuildingOfficeIcon,
		ChartBarIcon,
		CheckCircleIcon,
		ComputerDesktopIcon,
		CursorArrowRaysIcon,
		GlobeAltIcon,
		InformationCircleIcon,
		NewspaperIcon,
		PhoneIcon,
		PlayIcon,
		ShieldCheckIcon,
		Squares2X2Icon,
		UserGroupIcon,
		XMarkIcon,
		ChevronDownIcon,
	},
	props: {
		nav: Array,
	},
};
</script>
