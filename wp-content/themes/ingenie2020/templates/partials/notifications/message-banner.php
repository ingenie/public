<!-- Alert Notification -->
<div class="md:mt-2">
    <div class="flex justify-center bg-<?php echo $color ?>-400">
        <div class="py-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-<?php echo $color ?>-900" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <div class="p-3">
            <p class="text-<?php echo $color ?>-900 text-sm inline-block align-text-top"><?php echo $message ?> - <a
                    href="<?php echo $link ?>" class="underline" target="_blank">Find out more</a></p>
        </div>
    </div>
</div>
