<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Howdy - Premium Chat Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/logo1.png">
    
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#306e78", // Dark Teal
                        "primary-light": "#4fb0a9", // Lighter Teal
                        secondary: "#f59e0b", // Warm Amber
                        "background-light": "#f8fafc",
                        "background-dark": "#0f172a",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1e293b",
                    },
                    fontFamily: {
                        display: ["Plus Jakarta Sans", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.75rem",
                    },
                },
            },
        };
    </script>
    <style>
        ::-webkit-scrollbar { width: 5px; height: 5px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background-color: rgba(156, 163, 175, 0.4); border-radius: 10px; }
        .dark ::-webkit-scrollbar-thumb { background-color: rgba(71, 85, 105, 0.6); }
        .scroll-mask {
            mask-image: linear-gradient(to bottom, transparent, black 10px, black calc(100% - 10px), transparent);
            -webkit-mask-image: linear-gradient(to bottom, transparent, black 10px, black calc(100% - 10px), transparent);
        }
    </style>
    
    @vite(['resources/js/app.js'])
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 font-display h-screen w-screen overflow-hidden flex selection:bg-primary-light selection:text-white">

<!-- LEFTSIDE DOCK -->
<aside class="w-[80px] bg-primary flex flex-col items-center py-6 shadow-2xl z-30 shrink-0 relative">
    <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center mb-8 backdrop-blur-md shadow-inner border border-white/10">
        <img alt="Howdy" class="w-8 h-8 object-contain drop-shadow-md" src="/logo1.png" onerror="this.style.display='none'"/>
    </div>
    
    <nav class="flex-1 flex flex-col gap-5 w-full items-center">
        <button class="w-12 h-12 bg-white/20 text-white rounded-2xl relative transition-all flex items-center justify-center shadow-inner border border-white/10" title="Chats">
            <span class="material-symbols-outlined text-[26px]">chat_bubble</span>
            <span class="absolute top-2 right-2 w-2.5 h-2.5 bg-secondary border-2 border-primary rounded-full"></span>
        </button>
        <button class="w-12 h-12 text-white/50 hover:text-white hover:bg-white/10 rounded-2xl transition-all flex items-center justify-center" title="Contacts">
            <span class="material-symbols-outlined text-[26px]">group</span>
        </button>
        <button class="w-12 h-12 text-white/50 hover:text-white hover:bg-white/10 rounded-2xl transition-all flex items-center justify-center" title="Calls">
            <span class="material-symbols-outlined text-[26px]">call</span>
        </button>
        <button class="w-12 h-12 text-white/50 hover:text-white hover:bg-white/10 rounded-2xl transition-all flex items-center justify-center" title="Saved">
            <span class="material-symbols-outlined text-[26px]">bookmark</span>
        </button>
    </nav>
    
    <div class="flex flex-col items-center gap-5 mt-auto">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-12 h-12 text-white/50 hover:text-red-400 hover:bg-white/10 rounded-2xl transition-all flex items-center justify-center" title="Logout">
                <span class="material-symbols-outlined text-[26px]">logout</span>
            </button>
        </form>
        
        <button class="relative group" title="{{ $user->name }}">
            <div class="w-11 h-11 rounded-full p-[2px] bg-gradient-to-tr from-secondary to-yellow-300 transition-transform group-hover:scale-105 flex items-center justify-center font-bold text-white shadow-md">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-primary rounded-full"></div>
        </button>
    </div>
</aside>

<!-- CONTACTS LIST PANEL -->
<section class="w-80 lg:w-[380px] bg-surface-light dark:bg-surface-dark border-r border-slate-200 dark:border-slate-800 flex flex-col shrink-0 z-20 shadow-[8px_0_30px_-15px_rgba(0,0,0,0.1)] dark:shadow-none transition-colors">
    <div class="px-6 pt-8 pb-4 shrink-0">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-[28px] font-bold text-slate-900 dark:text-white tracking-tight">Messages</h1>
            <button class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 flex items-center justify-center hover:bg-primary hover:text-white dark:hover:bg-primary transition-all shadow-sm">
                <span class="material-symbols-outlined text-[20px]">edit_square</span>
            </button>
        </div>
        <div class="relative group">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
            <input class="w-full bg-background-light dark:bg-slate-800/50 border border-transparent focus:border-primary/30 rounded-2xl pl-11 pr-4 py-3 text-[15px] focus:ring-4 focus:ring-primary/10 dark:text-white placeholder-slate-400 transition-all outline-none" placeholder="Search conversations..." type="text"/>
        </div>
    </div>
    
    <div class="flex px-6 gap-6 mb-2 border-b border-slate-100 dark:border-slate-800 shrink-0">
        <button class="pb-3 text-sm font-semibold text-primary dark:text-primary-light border-b-2 border-primary relative top-[1px]">All Chats</button>
        <button class="pb-3 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition-colors">Unread</button>
        <button class="pb-3 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition-colors">Groups</button>
    </div>
    
    <div class="flex-1 overflow-y-auto px-3 py-2 space-y-1 scroll-mask" id="contacts-container">
        @forelse($contacts as $contact)
            <button class="contact-item w-full flex items-center gap-4 p-3.5 rounded-2xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group text-left relative overflow-hidden" data-id="{{ $contact->id }}" onclick="startChat({{ $contact->id }}, '{{ addslashes($contact->name) }}')">
                <div class="relative shrink-0">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center font-bold text-xl bg-slate-100 text-primary dark:bg-slate-800 border-2 border-transparent group-hover:border-primary/30">{{ strtoupper(substr($contact->name, 0, 1)) }}</div>
                    <div class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 border-2 border-surface-light dark:border-surface-dark rounded-full shadow-sm"></div>
                </div>
                <div class="flex-1 min-w-0 py-1">
                    <div class="flex justify-between items-baseline mb-1">
                        <h3 class="font-bold text-[15px] text-slate-900 dark:text-white truncate pr-2">{{ $contact->name }}</h3>
                        <span class="text-xs font-semibold text-slate-400 dark:text-slate-500 shrink-0">Available</span>
                    </div>
                    <p class="text-[14px] text-slate-500 dark:text-slate-400 font-medium truncate">Click to chat</p>
                </div>
            </button>
        @empty
            <div class="p-6 text-center text-slate-500 text-sm">No contacts available.</div>
        @endforelse
    </div>
</section>

<!-- MAIN CHAT AREA -->
<main class="flex-1 flex flex-col bg-background-light dark:bg-background-dark min-w-0 relative">
    <div class="absolute inset-0 opacity-[0.02] dark:opacity-[0.03] pointer-events-none z-0" style="background-image: radial-gradient(#306e78 1px, transparent 1px); background-size: 24px 24px;"></div>
    
    <!-- Empty State Content -->
    <div id="empty-state" class="absolute inset-0 flex flex-col items-center justify-center text-slate-500 z-10 transition-opacity">
        <span class="material-symbols-outlined text-[80px] opacity-20 mb-4">forum</span>
        <h2 class="text-2xl font-bold text-slate-700 dark:text-slate-300">Your Messages</h2>
        <p class="mt-2 text-sm">Select a contact from the sidebar to start chatting</p>
    </div>

    <!-- Active Chat Area (Hidden initially) -->
    <div id="active-chat-area" class="hidden flex-col h-full z-10">
        <header class="h-[88px] bg-surface-light/90 dark:bg-surface-dark/90 backdrop-blur-xl border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8 shrink-0 z-10 transition-colors">
            <div class="flex items-center gap-4 cursor-pointer group">
                <div class="relative">
                    <div id="chat-header-avatar" class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg bg-primary text-white shadow-sm group-hover:ring-2 ring-primary/20 transition-all">?</div>
                    <div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-surface-light dark:border-surface-dark rounded-full"></div>
                </div>
                <div>
                    <h2 id="chat-header-name" class="font-bold text-lg text-slate-900 dark:text-white leading-tight flex items-center gap-2">
                        Contact Name
                    </h2>
                    <span class="text-[13px] font-medium text-green-600 dark:text-green-400 flex items-center gap-1 mt-0.5">
                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full inline-block animate-pulse"></span> Online now
                    </span>
                </div>
            </div>
            
            <div class="flex items-center gap-2">
                <button class="w-11 h-11 rounded-full text-slate-500 hover:text-primary hover:bg-primary/10 dark:hover:bg-slate-800 dark:text-slate-400 flex items-center justify-center transition-all">
                    <span class="material-symbols-outlined text-[22px]">call</span>
                </button>
                <button class="w-11 h-11 rounded-full text-slate-500 hover:text-primary hover:bg-primary/10 dark:hover:bg-slate-800 dark:text-slate-400 flex items-center justify-center transition-all">
                    <span class="material-symbols-outlined text-[22px]">videocam</span>
                </button>
                <div class="w-px h-6 bg-slate-200 dark:bg-slate-700 mx-2"></div>
                <button class="w-11 h-11 rounded-full text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 dark:text-slate-400 flex items-center justify-center transition-all">
                    <span class="material-symbols-outlined text-[22px]">search</span>
                </button>
                <button class="w-11 h-11 rounded-full text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 dark:text-slate-400 flex items-center justify-center transition-all">
                    <span class="material-symbols-outlined text-[22px]">more_vert</span>
                </button>
            </div>
        </header>
        
        <div class="flex-1 overflow-y-auto px-8 py-6 space-y-6 relative scroll-mask flex flex-col" id="messages-container">
            <!-- Dynamic Messages Go Here -->
        </div>
        
        <div class="p-6 pt-4 bg-surface-light/90 dark:bg-surface-dark/90 backdrop-blur-xl border-t border-slate-200 dark:border-slate-800 shrink-0 transition-colors">
            <form id="chat-form" onsubmit="sendMessage(event)" class="max-w-4xl mx-auto flex items-end gap-3 bg-background-light dark:bg-slate-900/50 p-2 rounded-[24px] border border-slate-200 dark:border-slate-700/50 shadow-inner focus-within:border-primary/50 focus-within:ring-4 focus-within:ring-primary/10 transition-all">
                <div class="flex gap-1 pb-1.5 pl-1.5 shrink-0">
                    <button type="button" class="w-10 h-10 rounded-full text-slate-400 hover:text-primary hover:bg-primary/10 dark:hover:bg-slate-800 flex items-center justify-center transition-all group">
                        <span class="material-symbols-outlined text-[24px] group-hover:scale-110 transition-transform">add_circle</span>
                    </button>
                    <button type="button" class="w-10 h-10 rounded-full text-slate-400 hover:text-secondary hover:bg-secondary/10 dark:hover:bg-slate-800 flex items-center justify-center transition-all group">
                        <span class="material-symbols-outlined text-[24px] group-hover:scale-110 transition-transform">sentiment_satisfied</span>
                    </button>
                </div>
                
                <input autocomplete="off" id="chat-input" class="flex-1 bg-transparent border-none py-3.5 px-2 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-0 text-[15px] outline-none" placeholder="Type a message..."/>
                
                <button type="submit" class="w-12 h-12 rounded-[18px] bg-primary hover:bg-primary-light text-white flex items-center justify-center transition-all shadow-md hover:shadow-lg shrink-0 mb-0.5 mr-0.5 group">
                    <span class="material-symbols-outlined text-[20px] ml-0.5 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform">send</span>
                </button>
            </form>
            <div class="text-center mt-3">
                <span class="text-[11px] text-slate-400 dark:text-slate-500 font-medium">Press <kbd class="px-1.5 py-0.5 bg-slate-100 dark:bg-slate-800 rounded-md border border-slate-200 dark:border-slate-700">Enter</kbd> to send</span>
            </div>
        </div>
    </div>
</main>

<script>
    let currentConversationId = null;
    let currentContactName = "";
    let userId = {{ $user->id }};

    function startChat(contactId, contactName) {
        currentContactName = contactName;
        
        // Handle Sidebar UI state
        document.querySelectorAll('.contact-item').forEach(el => {
            el.classList.remove('bg-primary/5', 'dark:bg-primary/10', 'border', 'border-primary/10', 'dark:border-primary/20');
        });
        const selectedInfo = document.querySelector(`.contact-item[data-id="${contactId}"]`);
        if(selectedInfo) selectedInfo.classList.add('bg-primary/5', 'dark:bg-primary/10', 'border', 'border-primary/10', 'dark:border-primary/20');

        // Toggle UI Areas
        document.getElementById('empty-state').classList.add('hidden');
        document.getElementById('active-chat-area').classList.remove('hidden');
        document.getElementById('active-chat-area').classList.add('flex');
        
        // Update Header
        document.getElementById('chat-header-name').innerText = contactName;
        document.getElementById('chat-header-avatar').innerText = contactName.charAt(0).toUpperCase();

        // Prevent echo overlap
        if (currentConversationId) {
            window.Echo.leave('chat.' + currentConversationId);
        }

        const container = document.getElementById('messages-container');
        container.innerHTML = '<div style="text-align:center; color:gray; width:100%; font-size:12px; margin-top:20px;">Loading messages...</div>';

        // Start Chat Backend Axios Request
        axios.post('/chat/start', { user_id: contactId })
            .then(res => {
                currentConversationId = res.data.conversation.id;
                
                axios.get('/chat/conversations/' + currentConversationId + '/messages')
                     .then(msgRes => {
                         container.innerHTML = `
                            <div class="flex justify-center my-4 w-full">
                                <span class="px-5 py-1.5 rounded-full bg-slate-200/60 dark:bg-slate-800/60 text-[12px] font-bold tracking-wide uppercase text-slate-500 dark:text-slate-400 backdrop-blur-sm shadow-sm">Conversation Started</span>
                            </div>
                         `;
                         msgRes.data.messages.forEach(msg => appendMessage(msg));
                         container.scrollTop = container.scrollHeight;
                     });

                // WebSocket Listener
                window.Echo.private('chat.' + currentConversationId)
                    .listen('.message.sent', (e) => {
                        // Prevent UI duplicates if it's sent by us
                        if (e.message.user_id !== userId) {
                            appendMessage(e.message);
                            container.scrollTop = container.scrollHeight;
                        }
                    });
            });
    }

    function appendMessage(msg) {
        const container = document.getElementById('messages-container');
        if (!container) return;
        
        if (document.querySelector(`.message[data-id="${msg.id}"]`)) return;
        
        const isMe = msg.user_id === userId;
        const timeStr = new Date(msg.created_at || Date.now()).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
        
        let htmlBlock = '';
        
        if (isMe) {
            htmlBlock = `
            <div class="flex gap-4 max-w-[75%] items-end self-end message" data-id="${msg.id}">
                <div class="flex flex-col items-end gap-1">
                    <div class="bg-secondary text-white px-5 py-3.5 text-[15px] rounded-3xl rounded-br-sm shadow-md leading-relaxed break-words">
                        <p>${msg.content}</p>
                    </div>
                    <div class="flex items-center gap-1.5 mr-1">
                        <span class="text-[11px] font-semibold text-slate-400 dark:text-slate-500">${timeStr}</span>
                        <span class="material-symbols-outlined text-[16px] text-slate-300 dark:text-slate-600" title="Delivered">done</span>
                    </div>
                </div>
            </div>`;
        } else {
            htmlBlock = `
            <div class="flex gap-4 max-w-[75%] items-end message" data-id="${msg.id}">
                <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm bg-primary text-white shrink-0 mb-5 shadow-sm">${currentContactName.charAt(0).toUpperCase()}</div>
                <div class="flex flex-col items-start gap-1">
                    <div class="bg-primary-light text-white px-5 py-3.5 text-[15px] rounded-3xl rounded-bl-sm shadow-md leading-relaxed break-words">
                        <p>${msg.content}</p>
                    </div>
                    <span class="text-[11px] font-semibold text-slate-400 dark:text-slate-500 ml-1">${timeStr}</span>
                </div>
            </div>`;
        }
        
        container.insertAdjacentHTML('beforeend', htmlBlock);
    }

    function sendMessage(e) {
        e.preventDefault();
        const input = document.getElementById('chat-input');
        const text = input.value;
        
        if (!text.trim() || !currentConversationId) return;

        input.value = '';

        axios.post('/chat/messages', {
            conversation_id: currentConversationId,
            content: text
        }).then(res => {
            appendMessage(res.data.message);
            const container = document.getElementById('messages-container');
            container.scrollTop = container.scrollHeight;
        }).catch(err => {
            console.error("Failed to send", err);
        });
    }
</script>

</body>
</html>
