<?php defined('SYSPATH') or die('No direct script access.');?>

<div class="py-4">
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <div class="py-8 bg-white">
                <div class="max-w-xl mx-auto px-4 sm:px-6 lg:max-w-screen-xl lg:px-8">
                    <div class="grid grid-cols-1 lg:grid lg:grid-cols-3 lg:gap-4">
                        <a href="<?=Route::url('oc-panel',array('controller'=>'import'))?>" class="group px-4 py-4 text-sm leading-6 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
                            <h5 class="text-base leading-6 font-medium text-blue-600"><?= __('Import ads') ?></h5>
                            <p class="mt-2 text-sm leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis.
                            </p>
                        </a>
                        <a href="<?=Route::url('oc-panel',array('controller'=>'importUsers'))?>" class="group px-4 py-4 text-sm leading-6 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
                            <h5 class="text-base leading-6 font-medium text-blue-600"><?= __('Import users') ?></h5>
                            <p class="mt-2 text-sm leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis.
                            </p>
                        </a>
                        <a href="<?=Route::url('oc-panel',array('controller'=>'tools', 'action'=>'optimize'))?>" class="group px-4 py-4 text-sm leading-6 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
                            <h5 class="text-base leading-6 font-medium text-blue-600"><?= __('Optimize database') ?></h5>
                            <p class="mt-2 text-sm leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis.
                            </p>
                        </a>
                        <a href="<?=Route::url('oc-panel',array('controller'=>'tools', 'action'=>'sitemap'))?>" class="group px-4 py-4 text-sm leading-6 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
                            <h5 class="text-base leading-6 font-medium text-blue-600">Sitemap</h5>
                            <p class="mt-2 text-sm leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis.
                            </p>
                        </a>
                        <a href="<?=Route::url('oc-panel',array('controller'=>'tools', 'action'=>'migration'))?>" class="group px-4 py-4 text-sm leading-6 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
                            <h5 class="text-base leading-6 font-medium text-blue-600"><?= __('Migration') ?></h5>
                            <p class="mt-2 text-sm leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis.
                            </p>
                        </a>
                        <a href="<?=Route::url('oc-panel',array('controller'=>'tools', 'action'=>'cache'))?>" class="group px-4 py-4 text-sm leading-6 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
                            <h5 class="text-base leading-6 font-medium text-blue-600"><?= __('Cache') ?></h5>
                            <p class="mt-2 text-sm leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis.
                            </p>
                        </a>
                        <a href="<?=Route::url('oc-panel',array('controller'=>'tools', 'action'=>'logs'))?>" class="group px-4 py-4 text-sm leading-6 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
                            <h5 class="text-base leading-6 font-medium text-blue-600"><?= __('Logs') ?></h5>
                            <p class="mt-2 text-sm leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis.
                            </p>
                        </a>
                        <a href="<?=Route::url('oc-panel',array('controller'=>'tools', 'action'=>'phpinfo'))?>" class="group px-4 py-4 text-sm leading-6 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
                            <h5 class="text-base leading-6 font-medium text-blue-600"><?= __('PHP info') ?></h5>
                            <p class="mt-2 text-sm leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
