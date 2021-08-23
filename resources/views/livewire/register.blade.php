
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
		
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
					></div>
				
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
						<form 
                        wire:submit.prevent="submit"
                        class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        <div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="text">
									Username
								</label>
								<input
                                  wire:model="form.username"
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="username"
									type="text"
									placeholder="Username"
								/>
                                @error('form.username') <span class="text-red-400">{{$message}}</span> @enderror
							</div>
                        	<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="text">
									Fullname
								</label>
								<input
                                  wire:model="form.name"
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="name"
									type="text"
									placeholder="Fullname"
								/>
                                @error('form.name') <span class="text-red-400">{{$message}}</span> @enderror
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email Address
								</label>
								<input
                                 wire:model="form.email"
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
									type="email"
									placeholder="Email"
								/>
                                 @error('form.email') <span class="text-red-400">{{$message}}</span> @enderror
							</div>
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
										Password
									</label>
									<input
                                     wire:model="form.password"
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="password"
										type="password"
										placeholder="Enter Password"
                                        autocomplete
									/>
								 @error('form.password') <span class="text-red-400">{{$message}}</span> @enderror
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
										Confirm Password
									</label>
									<input
                                     wire:model="form.password_confirmation"
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="c_password"
										type="password"
										placeholder="Confirm Password"
                                        autocomplete
									/>
								</div>
							</div>
							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									type="submit"
								>
									Register Account
								</button>
							</div>
							<hr class="mb-6 border-t" />					
						</form>
					</div>
				</div>
			</div>
		</div>