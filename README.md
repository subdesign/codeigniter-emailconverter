# Codeigniter email converter helper

You can use this little helper to convert your email address to human readable against spam bots.  
Ie.: my@email.com -> my(at)email(dot)com

## Usage

    $this->load->helper('emailconv');
    echo emailconv('my@email.com', '[AT]', '[DOT]');

If you don't pass parameters, the predefined constant values will be used. You can set them in the helper.

## License

[MIT License](http://www.opensource.org/licenses/MIT)

C. 2012 Barna Szalai (sz.b@devartpro.com)