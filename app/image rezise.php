if($request->hasfile('image_icon')) {
          if ($image = $request->file('image_icon')) {
              $extension = $image->getClientOriginalExtension();
                $filename = str_replace(' ','', md5(time()).'_'.$image->getClientOriginalName());
                $thumb = \Image::make($image)->resize(100, 100,
                  function ($constraint) {
                      $constraint->aspectRatio();
                  })->encode($extension);
               $normal = \Image::make($image)->resize(260, 260,
                  function ($constraint) {
                      $constraint->aspectRatio();
                  })->encode($extension);
                $big = \Image::make($image)->encode($extension);
                $_800x800 = \Image::make($image)->resize(800, 800,
                  function ($constraint) {
                      $constraint->aspectRatio();
                  })->encode($extension);
                $_400x400 = \Image::make($image)->resize(400, 400,
                  function ($constraint) {
                      $constraint->aspectRatio();
                  })->encode($extension);
                \Storage::disk('spaces')->put('thumbs/'.$filename, (string)$thumb, 'public');
                \Storage::disk('spaces')->put('uploads/'.$filename, (string)$normal, 'public');
                \Storage::disk('spaces')->put('original/'.$filename, (string)$big, 'public');
                \Storage::disk('spaces')->put('800x800/'.$filename, (string)$_800x800, 'public');
                \Storage::disk('spaces')->put('400x400/'.$filename, (string)$_400x400, 'public');
              $cat->image_icon = $filename;
          }
      }