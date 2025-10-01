<form class="w-full mx-auto border-1 border-amber-400 rounded-[10px]">
  <div class="w-full flex items-center justify-center p-4">
        <!-- Modal Container -->
        <div class="bg-slate-800 rounded-xl w-full max-w-2xl max-h-[90vh] overflow-hidden shadow-2xl">
            <!-- Header -->
            <div class="flex items-center justify-between p-6 border-b border-slate-700">
                <h1 class="text-2xl font-semibold text-white">Create New Event</h1>
                <button class="text-slate-400 hover:text-white transition-colors">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Scrollable Form Content -->
            <div class="overflow-y-auto max-h-[calc(90vh-140px)] no-scrollbar">
                <form class="p-6 space-y-6">
                    <!-- Event Title -->
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Event Title</label>
                        <input 
                            type="text" 
                            placeholder="Enter event title"
                            class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-slate-400 transition-all"
                        >
                    </div>

                    <!-- Date and Time Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Event Date -->
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Event Date</label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    placeholder="10/01/2025"
                                    class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-slate-400 pr-10 transition-all"
                                >
                                <i class="fas fa-calendar-alt absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                            </div>
                        </div>

                        <!-- Event Time -->
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Event Time</label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    placeholder="--:-- --"
                                    class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-slate-400 pr-10 transition-all"
                                >
                                <i class="fas fa-clock absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Location</label>
                        <input 
                            type="text" 
                            placeholder="Event venue or online link"
                            class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-slate-400 transition-all"
                        >
                    </div>

                    <!-- Event Type -->
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Event Type</label>
                        <div class="relative">
                            <select class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white appearance-none transition-all">
                                <option value="">Select event type</option>
                                <option value="workshop">Workshop</option>
                                <option value="seminar">Seminar</option>
                                <option value="conference">Conference</option>
                                <option value="networking">Networking</option>
                                <option value="social">Social</option>
                                <option value="competition">Competition</option>
                            </select>
                            <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-400 pointer-events-none"></i>
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Description</label>
                        <textarea 
                            rows="4"
                            placeholder="Describe the event in detail"
                            class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-slate-400 resize-none transition-all"
                        ></textarea>
                    </div>

                    <!-- Registration and Participants Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Registration Link -->
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Registration Link (Optional)</label>
                            <input 
                                type="url" 
                                placeholder="https://registration-link.com"
                                class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-slate-400 transition-all"
                            >
                        </div>

                        <!-- Max Participants -->
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Max Participants</label>
                            <input 
                                type="number" 
                                placeholder="e.g. 100"
                                class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-slate-400 transition-all"
                            >
                        </div>
                    </div>

                    <!-- Event Poster Upload -->
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Event Poster (Square Format)</label>
                        <div class="border-2 border-dashed border-slate-600 rounded-lg p-8 text-center hover:border-slate-500 transition-colors">
                            <div class="flex flex-col items-center space-y-4">
                                <div class="w-16 h-16 bg-slate-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-image text-2xl text-slate-400"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-white mb-2">Upload Square Format Poster</h3>
                                    <p class="text-sm text-slate-400">JPG, PNG (Recommended: 1080×1080px) up to 5MB</p>
                                </div>
                                <input type="file" accept="image/*" class="hidden" id="poster-upload">
                                <label for="poster-upload" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg cursor-pointer transition-colors">
                                    <i class="fas fa-upload mr-2"></i>
                                    Choose File
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Notes -->
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Additional Notes (Optional)</label>
                        <textarea 
                            rows="3"
                            placeholder="Any additional information"
                            class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-white placeholder-slate-400 resize-none transition-all"
                        ></textarea>
                    </div>
                </form>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end gap-3 p-6 border-t border-slate-700 bg-slate-800">
                <button class="px-6 py-2 text-slate-300 hover:text-white transition-colors">
                    Cancel
                </button>
                <button class="inline-flex items-center px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                    <i class="fas fa-save mr-2"></i>
                    Save as Draft
                </button>
                <button class="inline-flex items-center px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Create Event
                </button>
            </div>
        </div>
    </div>
</form>