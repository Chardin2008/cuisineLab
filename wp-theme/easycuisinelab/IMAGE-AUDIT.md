# Image Audit - Easy Cuisine Lab

Chaque visuel est généré séparément et référencé une seule fois dans le thème.

| Image | Emplacement | Usage unique |
| --- | --- | --- |
| hero-main.jpg | assets/img/hero-main.jpg | utilisé uniquement dans le hero |
| concept-lab.jpg | assets/img/concept-lab.jpg | utilisé uniquement dans la section concept |
| inspiration-soft.jpg | assets/img/inspiration-soft.jpg | utilisé uniquement dans inspiration 1 |
| inspiration-coral.jpg | assets/img/inspiration-coral.jpg | utilisé uniquement dans inspiration 2 |
| inspiration-green.jpg | assets/img/inspiration-green.jpg | utilisé uniquement dans inspiration 3 |
| method-lab.jpg | assets/img/method-lab.jpg | utilisé uniquement dans la section méthode |
| before-kitchen.jpg | assets/img/before-kitchen.jpg | utilisé uniquement dans avant/après avant |
| after-kitchen.jpg | assets/img/after-kitchen.jpg | utilisé uniquement dans avant/après après |
| blog-1.jpg | assets/img/blog-1.jpg | utilisé uniquement dans article 1 de démonstration |
| blog-2.jpg | assets/img/blog-2.jpg | utilisé uniquement dans article 2 de démonstration |
| blog-3.jpg | assets/img/blog-3.jpg | utilisé uniquement dans article 3 de démonstration |
| og-easycuisinelab.jpg | assets/img/og-easycuisinelab.jpg | utilisé uniquement pour Open Graph |

Prompts utilisés :

- Hero : "Bright modern premium kitchen interior with creative design studio atmosphere, soft mint and papaya accents, elegant central island, warm natural light, fresh editorial lifestyle photography, realistic, ultra detailed, no text, no logo."
- Concept : "Creative kitchen design lab atmosphere with material samples, sketches, soft pastel kitchen palette, refined workspace, natural light, premium editorial photography, realistic, no text, no logo."
- Inspiration 1 : "Elegant bright kitchen with pistachio green accents, clean cabinetry, soft daylight, premium lifestyle interior design, realistic editorial photography, no text, no logo."
- Inspiration 2 : "Modern warm kitchen with papaya coral details, refined furniture, cozy contemporary styling, fresh editorial interior photography, realistic, no text, no logo."
- Inspiration 3 : "Premium family kitchen with soft aqua accents, elegant island, bright natural light, warm and welcoming atmosphere, realistic lifestyle interior photography, no text, no logo."
- Méthode : "Interior design consultation for kitchen project, material boards, sketches, refined modern workspace, soft colors, premium editorial photo, realistic, no text, no logo."
- Avant : "Simple outdated kitchen interior before renovation, neutral plain style, realistic interior photo, no text, no logo."
- Après : "Beautiful transformed modern kitchen interior after renovation, bright fresh palette, elegant island, premium materials, natural light, realistic editorial photo, no text, no logo."
- Blog 1 : "Kitchen harmony moodboard with fresh colors, materials, soft mint, papaya, wood, modern editorial layout, realistic, no text, no logo."
- Blog 2 : "Modern kitchen color inspiration with soft pastel accents, cabinetry, countertop samples, interior design moodboard, realistic editorial photo, no text, no logo."
- Blog 3 : "Premium kitchen detail photo with elegant handles, refined surface, soft daylight, lifestyle interior photography, realistic, no text, no logo."
- Open Graph : "Premium bright kitchen design brand visual for Easy Cuisine Lab, elegant modern interior, fresh colors, editorial composition, realistic, no text, no logo."

Preuve de non-répétition : les références `assets/img/*.jpg` ont été auditées par recherche dans le thème. Chaque fichier de la liste ci-dessus apparaît dans un seul contexte de rendu, sauf `og-easycuisinelab.jpg` qui apparaît seulement dans les balises sociales.
