<div class="text-white font-bold tracking-wider my-16">
    <div class="container mx-auto flex justify-center">        
        
            <div class="w-auto border-2 rounded font-extrabold">
                <div class="w-full h-12 flex justify-center px-4 py-4 mt-4">
                    <p>Calcul<span class="text-yellow-500">Adora</span> xD</p>                    
                </div>
                <div class="w-full h-12 bg-slate-900 flex justify-end px-4 py-4 mt-4">
                    <p>{{ $math }}</p>                    
                </div>
                <div class="w-full h-12 bg-slate-900 flex justify-end px-4 py-4 mb-4">                   
                    <p>= <span class="text-yellow-500">{{ $result }}</span></p>
                </div>
                <div class="w-full flex gap-x-20 justify-center mt-10 px-10 mb-4">
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="operation('%')">Mod</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="operation('(')">(</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="operation(')')">)</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="operation('/')">/</button>                    
                </div>
                <div class="w-full flex gap-x-20 justify-center  mb-4">
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(7)">7</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(8)">8</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(9)">9</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="operation('*')">*</button>                    
                </div>
                <div class="w-full flex gap-x-20 justify-center  mb-4">
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(4)">4</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(5)">5</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(6)">6</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400"  wire:click="operation('-')">-</button>                    
                </div>
                <div class="w-full flex gap-x-20 justify-center  mb-4">
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(1)">1</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(2)">2</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(3)">3</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="operation('+')">+</button>                    
                </div>
                <div class="w-full flex gap-x-20 justify-center mb-10">                    
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400" wire:click="addMath(0)">0</button>
                    <button class="w-16 bg-zinc-900 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400"  wire:click="operation('.')">.</button>
                    <button class="w-16 bg-yellow-600 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400 hover:bg-yellow-700" wire:click="clear">C</button>
                    <button class="w-16 bg-yellow-600 h-16 rounded-full border-2 border-purple-800 hover:border-purple-400 hover:bg-yellow-700" wire:click="operation('=')">=</button>                    
                </div>
            </div>
            
        
        
    </div>
</div>
