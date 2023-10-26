import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-bulk-upload-field', IndexField)
  app.component('detail-bulk-upload-field', DetailField)
  app.component('form-bulk-upload-field', FormField)
})
